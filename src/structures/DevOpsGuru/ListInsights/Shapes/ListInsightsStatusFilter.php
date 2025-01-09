<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListInsightsOngoingStatusFilter $Ongoing
 * @property ListInsightsClosedStatusFilter $Closed
 * @property ListInsightsAnyStatusFilter $Any
 */
class ListInsightsStatusFilter extends Shape
{
    /**
     * @param array{
     *     Ongoing?: ListInsightsOngoingStatusFilter,
     *     Closed?: ListInsightsClosedStatusFilter,
     *     Any?: ListInsightsAnyStatusFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
