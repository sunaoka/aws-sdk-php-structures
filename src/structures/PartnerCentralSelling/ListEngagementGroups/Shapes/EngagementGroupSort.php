<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count'|'UpdatedAt' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class EngagementGroupSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'Count'|'UpdatedAt',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
