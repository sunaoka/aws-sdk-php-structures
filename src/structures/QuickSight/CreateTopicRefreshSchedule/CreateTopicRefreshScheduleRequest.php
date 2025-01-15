<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property string $DatasetArn
 * @property string|null $DatasetName
 * @property Shapes\TopicRefreshSchedule $RefreshSchedule
 */
class CreateTopicRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     DatasetArn: string,
     *     DatasetName?: string|null,
     *     RefreshSchedule: Shapes\TopicRefreshSchedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
