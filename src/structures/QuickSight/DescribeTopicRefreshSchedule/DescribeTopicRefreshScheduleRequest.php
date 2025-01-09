<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property string $DatasetId
 */
class DescribeTopicRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     DatasetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
