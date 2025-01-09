<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardId
 * @property string $Arn
 * @property string $Name
 * @property DashboardVersion $Version
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastPublishedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property list<string> $LinkEntities
 */
class Dashboard extends Shape
{
    /**
     * @param array{
     *     DashboardId?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Version?: DashboardVersion,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastPublishedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     LinkEntities?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
