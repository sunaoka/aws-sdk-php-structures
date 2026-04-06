<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DashboardId
 * @property string|null $Arn
 * @property string|null $Name
 * @property DashboardVersion|null $Version
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastPublishedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property list<string>|null $LinkEntities
 */
class Dashboard extends Shape
{
    /**
     * @param array{
     *     DashboardId?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Version?: DashboardVersion|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastPublishedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     LinkEntities?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
