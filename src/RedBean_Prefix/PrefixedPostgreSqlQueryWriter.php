<?php

class PrefixedPostgreSqlQueryWriter extends RedBean_QueryWriter_PostgreSQL
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

	public function safeTable( $name, $noQuotes=false )
	{
		return parent::safeTable($this->prefix . $name, $noQuotes);
	}
}