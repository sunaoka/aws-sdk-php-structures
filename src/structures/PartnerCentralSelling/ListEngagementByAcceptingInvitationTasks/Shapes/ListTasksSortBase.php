<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementByAcceptingInvitationTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StartTime' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ListTasksSortBase extends Shape
{
    /**
     * @param array{
     *     SortBy: 'StartTime',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
