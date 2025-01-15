<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicRefreshSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetId
 * @property string|null $DatasetArn
 * @property string|null $DatasetName
 * @property TopicRefreshSchedule|null $RefreshSchedule
 */
class TopicRefreshScheduleSummary extends Shape
{
    /**
     * @param array{
     *     DatasetId?: string|null,
     *     DatasetArn?: string|null,
     *     DatasetName?: string|null,
     *     RefreshSchedule?: TopicRefreshSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
