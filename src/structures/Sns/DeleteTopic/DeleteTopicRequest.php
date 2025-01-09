<?php

namespace Sunaoka\Aws\Structures\Sns\DeleteTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 */
class DeleteTopicRequest extends Request
{
    /**
     * @param array{TopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
