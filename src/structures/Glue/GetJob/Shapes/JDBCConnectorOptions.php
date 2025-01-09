<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterPredicate
 * @property string $PartitionColumn
 * @property int $LowerBound
 * @property int $UpperBound
 * @property int $NumPartitions
 * @property list<string> $JobBookmarkKeys
 * @property string $JobBookmarkKeysSortOrder
 * @property array<'ARRAY'|'BIGINT'|'BINARY'|'BIT'|'BLOB'|'BOOLEAN'|'CHAR'|'CLOB'|'DATALINK'|'DATE'|'DECIMAL'|'DISTINCT'|'DOUBLE'|'FLOAT'|'INTEGER'|'JAVA_OBJECT'|'LONGNVARCHAR'|'LONGVARBINARY'|'LONGVARCHAR'|'NCHAR'|'NCLOB'|'NULL'|'NUMERIC'|'NVARCHAR'|'OTHER'|'REAL'|'REF'|'REF_CURSOR'|'ROWID'|'SMALLINT'|'SQLXML'|'STRUCT'|'TIME'|'TIME_WITH_TIMEZONE'|'TIMESTAMP'|'TIMESTAMP_WITH_TIMEZONE'|'TINYINT'|'VARBINARY'|'VARCHAR', 'DATE'|'STRING'|'TIMESTAMP'|'INT'|'FLOAT'|'LONG'|'BIGDECIMAL'|'BYTE'|'SHORT'|'DOUBLE'> $DataTypeMapping
 */
class JDBCConnectorOptions extends Shape
{
    /**
     * @param array{
     *     FilterPredicate?: string,
     *     PartitionColumn?: string,
     *     LowerBound?: int,
     *     UpperBound?: int,
     *     NumPartitions?: int,
     *     JobBookmarkKeys?: list<string>,
     *     JobBookmarkKeysSortOrder?: string,
     *     DataTypeMapping?: array<'ARRAY'|'BIGINT'|'BINARY'|'BIT'|'BLOB'|'BOOLEAN'|'CHAR'|'CLOB'|'DATALINK'|'DATE'|'DECIMAL'|'DISTINCT'|'DOUBLE'|'FLOAT'|'INTEGER'|'JAVA_OBJECT'|'LONGNVARCHAR'|'LONGVARBINARY'|'LONGVARCHAR'|'NCHAR'|'NCLOB'|'NULL'|'NUMERIC'|'NVARCHAR'|'OTHER'|'REAL'|'REF'|'REF_CURSOR'|'ROWID'|'SMALLINT'|'SQLXML'|'STRUCT'|'TIME'|'TIME_WITH_TIMEZONE'|'TIMESTAMP'|'TIMESTAMP_WITH_TIMEZONE'|'TINYINT'|'VARBINARY'|'VARCHAR', 'DATE'|'STRING'|'TIMESTAMP'|'INT'|'FLOAT'|'LONG'|'BIGDECIMAL'|'BYTE'|'SHORT'|'DOUBLE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
