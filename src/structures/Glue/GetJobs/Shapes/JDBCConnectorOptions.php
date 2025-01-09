<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterPredicate
 * @property string $PartitionColumn
 * @property int<0, max> $LowerBound
 * @property int<0, max> $UpperBound
 * @property int<0, max> $NumPartitions
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
     *     LowerBound?: int<0, max>,
     *     UpperBound?: int<0, max>,
     *     NumPartitions?: int<0, max>,
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
