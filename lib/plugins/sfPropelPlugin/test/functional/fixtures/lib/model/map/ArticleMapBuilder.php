<?php



class ArticleMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ArticleMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('article');
		$tMap->setPhpName('Article');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, true, 255);

		$tMap->addColumn('BODY', 'Body', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ONLINE', 'Online', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('EXCERPT', 'Excerpt', 'string', CreoleTypes::VARCHAR, false, null);

		$tMap->addForeignKey('CATEGORY_ID', 'CategoryId', 'int', CreoleTypes::INTEGER, 'category', 'ID', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('END_DATE', 'EndDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addForeignKey('BOOK_ID', 'BookId', 'int', CreoleTypes::INTEGER, 'book', 'ID', false, null);

	} 
} 