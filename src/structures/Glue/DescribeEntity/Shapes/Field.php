<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property string|null $Label
 * @property string|null $Description
 * @property 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT'|null $FieldType
 * @property bool|null $IsPrimaryKey
 * @property bool|null $IsNullable
 * @property bool|null $IsRetrievable
 * @property bool|null $IsFilterable
 * @property bool|null $IsPartitionable
 * @property bool|null $IsCreateable
 * @property bool|null $IsUpdateable
 * @property bool|null $IsUpsertable
 * @property bool|null $IsDefaultOnCreate
 * @property list<string>|null $SupportedValues
 * @property list<'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'EQUAL_TO'|'NOT_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'CONTAINS'|'ORDER_BY'>|null $SupportedFilterOperators
 * @property string|null $ParentField
 * @property string|null $NativeDataType
 * @property array<string, string>|null $CustomProperties
 */
class Field extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     Label?: string|null,
     *     Description?: string|null,
     *     FieldType?: 'INT'|'SMALLINT'|'BIGINT'|'FLOAT'|'LONG'|'DATE'|'BOOLEAN'|'MAP'|'ARRAY'|'STRING'|'TIMESTAMP'|'DECIMAL'|'BYTE'|'SHORT'|'DOUBLE'|'STRUCT'|null,
     *     IsPrimaryKey?: bool|null,
     *     IsNullable?: bool|null,
     *     IsRetrievable?: bool|null,
     *     IsFilterable?: bool|null,
     *     IsPartitionable?: bool|null,
     *     IsCreateable?: bool|null,
     *     IsUpdateable?: bool|null,
     *     IsUpsertable?: bool|null,
     *     IsDefaultOnCreate?: bool|null,
     *     SupportedValues?: list<string>|null,
     *     SupportedFilterOperators?: list<'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'EQUAL_TO'|'NOT_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'LESS_THAN_OR_EQUAL_TO'|'CONTAINS'|'ORDER_BY'>|null,
     *     ParentField?: string|null,
     *     NativeDataType?: string|null,
     *     CustomProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
