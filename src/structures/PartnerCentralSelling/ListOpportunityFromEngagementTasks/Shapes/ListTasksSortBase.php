<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityFromEngagementTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'StartTime' $SortBy
 */
class ListTasksSortBase extends Shape
{
    /**
     * @param array{
     *     SortOrder: 'ASCENDING'|'DESCENDING',
     *     SortBy: 'StartTime'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
