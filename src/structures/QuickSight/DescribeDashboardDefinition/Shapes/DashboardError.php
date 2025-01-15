<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED'|'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'PARAMETER_VALUE_INCOMPATIBLE'|'PARAMETER_TYPE_INVALID'|'PARAMETER_NOT_FOUND'|'COLUMN_TYPE_MISMATCH'|'COLUMN_GEOGRAPHIC_ROLE_MISMATCH'|'COLUMN_REPLACEMENT_MISSING'|null $Type
 * @property string|null $Message
 * @property list<Entity>|null $ViolatedEntities
 */
class DashboardError extends Shape
{
    /**
     * @param array{
     *     Type?: 'ACCESS_DENIED'|'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'PARAMETER_VALUE_INCOMPATIBLE'|'PARAMETER_TYPE_INVALID'|'PARAMETER_NOT_FOUND'|'COLUMN_TYPE_MISMATCH'|'COLUMN_GEOGRAPHIC_ROLE_MISMATCH'|'COLUMN_REPLACEMENT_MISSING'|null,
     *     Message?: string|null,
     *     ViolatedEntities?: list<Entity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
