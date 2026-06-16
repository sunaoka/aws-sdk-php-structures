<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListProspectingFromEngagementTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'StartTime'|'TaskName'|'FailedEngagementCount' $SortBy
 */
class ProspectingFromEngagementTaskSort extends Shape
{
    /**
     * @param array{
     *     SortOrder: 'ASCENDING'|'DESCENDING',
     *     SortBy: 'StartTime'|'TaskName'|'FailedEngagementCount'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
