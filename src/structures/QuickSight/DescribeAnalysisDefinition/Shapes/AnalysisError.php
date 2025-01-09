<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED'|'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'PARAMETER_VALUE_INCOMPATIBLE'|'PARAMETER_TYPE_INVALID'|'PARAMETER_NOT_FOUND'|'COLUMN_TYPE_MISMATCH'|'COLUMN_GEOGRAPHIC_ROLE_MISMATCH'|'COLUMN_REPLACEMENT_MISSING' $Type
 * @property string $Message
 * @property list<Entity> $ViolatedEntities
 */
class AnalysisError extends Shape
{
    /**
     * @param array{
     *     Type?: 'ACCESS_DENIED'|'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'PARAMETER_VALUE_INCOMPATIBLE'|'PARAMETER_TYPE_INVALID'|'PARAMETER_NOT_FOUND'|'COLUMN_TYPE_MISMATCH'|'COLUMN_GEOGRAPHIC_ROLE_MISMATCH'|'COLUMN_REPLACEMENT_MISSING',
     *     Message?: string,
     *     ViolatedEntities?: list<Entity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
