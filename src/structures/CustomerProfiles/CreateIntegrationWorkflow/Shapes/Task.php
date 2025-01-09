<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorOperator $ConnectorOperator
 * @property string $DestinationField
 * @property list<string> $SourceFields
 * @property array<'VALUE'|'VALUES'|'DATA_TYPE'|'UPPER_BOUND'|'LOWER_BOUND'|'SOURCE_DATA_TYPE'|'DESTINATION_DATA_TYPE'|'VALIDATION_ACTION'|'MASK_VALUE'|'MASK_LENGTH'|'TRUNCATE_LENGTH'|'MATH_OPERATION_FIELDS_ORDER'|'CONCAT_FORMAT'|'SUBFIELD_CATEGORY_MAP', string> $TaskProperties
 * @property 'Arithmetic'|'Filter'|'Map'|'Mask'|'Merge'|'Truncate'|'Validate' $TaskType
 */
class Task extends Shape
{
    /**
     * @param array{
     *     ConnectorOperator?: ConnectorOperator,
     *     DestinationField?: string,
     *     SourceFields: list<string>,
     *     TaskProperties?: array<'VALUE'|'VALUES'|'DATA_TYPE'|'UPPER_BOUND'|'LOWER_BOUND'|'SOURCE_DATA_TYPE'|'DESTINATION_DATA_TYPE'|'VALIDATION_ACTION'|'MASK_VALUE'|'MASK_LENGTH'|'TRUNCATE_LENGTH'|'MATH_OPERATION_FIELDS_ORDER'|'CONCAT_FORMAT'|'SUBFIELD_CATEGORY_MAP', string>,
     *     TaskType: 'Arithmetic'|'Filter'|'Map'|'Mask'|'Merge'|'Truncate'|'Validate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
