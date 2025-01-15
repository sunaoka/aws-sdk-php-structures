<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $sourceFields
 * @property ConnectorOperator|null $connectorOperator
 * @property string|null $destinationField
 * @property 'Arithmetic'|'Filter'|'Map'|'Map_all'|'Mask'|'Merge'|'Passthrough'|'Truncate'|'Validate'|'Partition' $taskType
 * @property array<'VALUE'|'VALUES'|'DATA_TYPE'|'UPPER_BOUND'|'LOWER_BOUND'|'SOURCE_DATA_TYPE'|'DESTINATION_DATA_TYPE'|'VALIDATION_ACTION'|'MASK_VALUE'|'MASK_LENGTH'|'TRUNCATE_LENGTH'|'MATH_OPERATION_FIELDS_ORDER'|'CONCAT_FORMAT'|'SUBFIELD_CATEGORY_MAP'|'EXCLUDE_SOURCE_FIELDS_LIST'|'INCLUDE_NEW_FIELDS'|'ORDERED_PARTITION_KEYS_LIST', string>|null $taskProperties
 */
class Task extends Shape
{
    /**
     * @param array{
     *     sourceFields: list<string>,
     *     connectorOperator?: ConnectorOperator|null,
     *     destinationField?: string|null,
     *     taskType: 'Arithmetic'|'Filter'|'Map'|'Map_all'|'Mask'|'Merge'|'Passthrough'|'Truncate'|'Validate'|'Partition',
     *     taskProperties?: array<'VALUE'|'VALUES'|'DATA_TYPE'|'UPPER_BOUND'|'LOWER_BOUND'|'SOURCE_DATA_TYPE'|'DESTINATION_DATA_TYPE'|'VALIDATION_ACTION'|'MASK_VALUE'|'MASK_LENGTH'|'TRUNCATE_LENGTH'|'MATH_OPERATION_FIELDS_ORDER'|'CONCAT_FORMAT'|'SUBFIELD_CATEGORY_MAP'|'EXCLUDE_SOURCE_FIELDS_LIST'|'INCLUDE_NEW_FIELDS'|'ORDERED_PARTITION_KEYS_LIST', string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
