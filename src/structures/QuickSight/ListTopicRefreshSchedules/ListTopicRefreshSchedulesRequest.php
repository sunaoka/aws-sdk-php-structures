<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicRefreshSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 */
class ListTopicRefreshSchedulesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
