<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $DashboardId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property int<1, max>|null $PublishedVersionNumber
 * @property \Aws\Api\DateTimeResult|null $LastPublishedTime
 */
class DashboardSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     DashboardId?: string|null,
     *     Name?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     PublishedVersionNumber?: int<1, max>|null,
     *     LastPublishedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
