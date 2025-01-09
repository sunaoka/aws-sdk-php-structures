<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property string $RefreshId
 */
class DescribeTopicRefreshRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     RefreshId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
