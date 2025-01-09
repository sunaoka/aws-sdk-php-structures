<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property string $DatasetId
 * @property Shapes\TopicRefreshSchedule $RefreshSchedule
 */
class UpdateTopicRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     DatasetId: string,
     *     RefreshSchedule: Shapes\TopicRefreshSchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
