<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilterPredicate
 * @property string|null $PartitionColumn
 * @property int<0, max>|null $LowerBound
 * @property int<0, max>|null $UpperBound
 * @property int<0, max>|null $NumPartitions
 * @property list<string>|null $JobBookmarkKeys
 * @property string|null $JobBookmarkKeysSortOrder
 * @property array<'ARRAY'|'BIGINT'|'BINARY'|'BIT'|'BLOB'|'BOOLEAN'|'CHAR'|'CLOB'|'DATALINK'|'DATE'|'DECIMAL'|'DISTINCT'|'DOUBLE'|'FLOAT'|'INTEGER'|'JAVA_OBJECT'|'LONGNVARCHAR'|'LONGVARBINARY'|'LONGVARCHAR'|'NCHAR'|'NCLOB'|'NULL'|'NUMERIC'|'NVARCHAR'|'OTHER'|'REAL'|'REF'|'REF_CURSOR'|'ROWID'|'SMALLINT'|'SQLXML'|'STRUCT'|'TIME'|'TIME_WITH_TIMEZONE'|'TIMESTAMP'|'TIMESTAMP_WITH_TIMEZONE'|'TINYINT'|'VARBINARY'|'VARCHAR', 'DATE'|'STRING'|'TIMESTAMP'|'INT'|'FLOAT'|'LONG'|'BIGDECIMAL'|'BYTE'|'SHORT'|'DOUBLE'>|null $DataTypeMapping
 */
class JDBCConnectorOptions extends Shape
{
    /**
     * @param array{
     *     FilterPredicate?: string|null,
     *     PartitionColumn?: string|null,
     *     LowerBound?: int<0, max>|null,
     *     UpperBound?: int<0, max>|null,
     *     NumPartitions?: int<0, max>|null,
     *     JobBookmarkKeys?: list<string>|null,
     *     JobBookmarkKeysSortOrder?: string|null,
     *     DataTypeMapping?: array<'ARRAY'|'BIGINT'|'BINARY'|'BIT'|'BLOB'|'BOOLEAN'|'CHAR'|'CLOB'|'DATALINK'|'DATE'|'DECIMAL'|'DISTINCT'|'DOUBLE'|'FLOAT'|'INTEGER'|'JAVA_OBJECT'|'LONGNVARCHAR'|'LONGVARBINARY'|'LONGVARCHAR'|'NCHAR'|'NCLOB'|'NULL'|'NUMERIC'|'NVARCHAR'|'OTHER'|'REAL'|'REF'|'REF_CURSOR'|'ROWID'|'SMALLINT'|'SQLXML'|'STRUCT'|'TIME'|'TIME_WITH_TIMEZONE'|'TIMESTAMP'|'TIMESTAMP_WITH_TIMEZONE'|'TINYINT'|'VARBINARY'|'VARCHAR', 'DATE'|'STRING'|'TIMESTAMP'|'INT'|'FLOAT'|'LONG'|'BIGDECIMAL'|'BYTE'|'SHORT'|'DOUBLE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
