<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property string $Label
 * @property string $Description
 * @property 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT' $FieldType
 * @property bool $IsPrimaryKey
 * @property bool $IsNullable
 * @property bool $IsRetrievable
 * @property bool $IsFilterable
 * @property bool $IsPartitionable
 * @property bool $IsCreateable
 * @property bool $IsUpdateable
 * @property bool $IsUpsertable
 * @property bool $IsDefaultOnCreate
 * @property list<string> $SupportedValues
 * @property list<'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'EQUAL_TO'|'NOT_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'CONTAINS'|'ORDER_BY'> $SupportedFilterOperators
 * @property string $ParentField
 * @property string $NativeDataType
 * @property array<string, string> $CustomProperties
 */
class Field extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     Label?: string,
     *     Description?: string,
     *     FieldType?: 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT',
     *     IsPrimaryKey?: bool,
     *     IsNullable?: bool,
     *     IsRetrievable?: bool,
     *     IsFilterable?: bool,
     *     IsPartitionable?: bool,
     *     IsCreateable?: bool,
     *     IsUpdateable?: bool,
     *     IsUpsertable?: bool,
     *     IsDefaultOnCreate?: bool,
     *     SupportedValues?: list<string>,
     *     SupportedFilterOperators?: list<'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'EQUAL_TO'|'NOT_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'CONTAINS'|'ORDER_BY'>,
     *     ParentField?: string,
     *     NativeDataType?: string,
     *     CustomProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
