<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $DashboardId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property int<1, max> $PublishedVersionNumber
 * @property \Aws\Api\DateTimeResult $LastPublishedTime
 */
class DashboardSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     DashboardId?: string,
     *     Name?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     PublishedVersionNumber?: int<1, max>,
     *     LastPublishedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
