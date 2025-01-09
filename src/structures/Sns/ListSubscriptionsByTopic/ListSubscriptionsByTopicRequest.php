<?php

namespace Sunaoka\Aws\Structures\Sns\ListSubscriptionsByTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $NextToken
 */
class ListSubscriptionsByTopicRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
