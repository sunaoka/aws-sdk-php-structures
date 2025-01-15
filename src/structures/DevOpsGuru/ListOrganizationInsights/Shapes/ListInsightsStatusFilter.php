<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListInsightsOngoingStatusFilter|null $Ongoing
 * @property ListInsightsClosedStatusFilter|null $Closed
 * @property ListInsightsAnyStatusFilter|null $Any
 */
class ListInsightsStatusFilter extends Shape
{
    /**
     * @param array{
     *     Ongoing?: ListInsightsOngoingStatusFilter|null,
     *     Closed?: ListInsightsClosedStatusFilter|null,
     *     Any?: ListInsightsAnyStatusFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
