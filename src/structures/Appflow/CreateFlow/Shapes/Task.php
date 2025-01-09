<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $sourceFields
 * @property ConnectorOperator $connectorOperator
 * @property string $destinationField
 * @property 'Arithmetic'|'Filter'|'Map'|'Map_all'|'Mask'|'Merge'|'Passthrough'|'Truncate'|'Validate'|'Partition' $taskType
 * @property array<'VALUE'|'VALUES'|'DATA_TYPE'|'UPPER_BOUND'|'LOWER_BOUND'|'SOURCE_DATA_TYPE'|'DESTINATION_DATA_TYPE'|'VALIDATION_ACTION'|'MASK_VALUE'|'MASK_LENGTH'|'TRUNCATE_LENGTH'|'MATH_OPERATION_FIELDS_ORDER'|'CONCAT_FORMAT'|'SUBFIELD_CATEGORY_MAP'|'EXCLUDE_SOURCE_FIELDS_LIST'|'INCLUDE_NEW_FIELDS'|'ORDERED_PARTITION_KEYS_LIST', string> $taskProperties
 */
class Task extends Shape
{
    /**
     * @param array{
     *     sourceFields: list<string>,
     *     connectorOperator?: ConnectorOperator,
     *     destinationField?: string,
     *     taskType: 'Arithmetic'|'Filter'|'Map'|'Map_all'|'Mask'|'Merge'|'Passthrough'|'Truncate'|'Validate'|'Partition',
     *     taskProperties?: array<'VALUE'|'VALUES'|'DATA_TYPE'|'UPPER_BOUND'|'LOWER_BOUND'|'SOURCE_DATA_TYPE'|'DESTINATION_DATA_TYPE'|'VALIDATION_ACTION'|'MASK_VALUE'|'MASK_LENGTH'|'TRUNCATE_LENGTH'|'MATH_OPERATION_FIELDS_ORDER'|'CONCAT_FORMAT'|'SUBFIELD_CATEGORY_MAP'|'EXCLUDE_SOURCE_FIELDS_LIST'|'INCLUDE_NEW_FIELDS'|'ORDERED_PARTITION_KEYS_LIST', string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
