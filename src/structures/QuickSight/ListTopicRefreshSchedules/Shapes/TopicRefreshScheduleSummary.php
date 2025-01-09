<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicRefreshSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetId
 * @property string $DatasetArn
 * @property string $DatasetName
 * @property TopicRefreshSchedule $RefreshSchedule
 */
class TopicRefreshScheduleSummary extends Shape
{
    /**
     * @param array{
     *     DatasetId?: string,
     *     DatasetArn?: string,
     *     DatasetName?: string,
     *     RefreshSchedule?: TopicRefreshSchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
