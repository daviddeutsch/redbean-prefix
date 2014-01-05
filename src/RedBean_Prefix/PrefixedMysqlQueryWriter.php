<?php

class PrefixedMysqlQueryWriter extends RedBean_QueryWriter_MySQL
{
	protected $prefix;

	public function __construct( $adapter, $prefix )
	{
		$this->setPrefix($prefix);

		return parent::__construct($adapter);
	}

	public function setPrefix( $prefix )
	{
		$this->prefix = $prefix;
	}

	public function esc( $dbStructure, $dontQuote = FALSE )
	{
		$this->check( $dbStructure );

		$table = $dbStructure;
		if ( !empty( $this->prefix ) ) {
			$table = $this->prefix . $table;
		}

		return ( $dontQuote ) ? $table : $this->quoteCharacter . $table . $this->quoteCharacter;
	}
}
