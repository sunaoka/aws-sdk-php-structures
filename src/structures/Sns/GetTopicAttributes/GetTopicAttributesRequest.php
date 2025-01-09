<?php

namespace Sunaoka\Aws\Structures\Sns\GetTopicAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 */
class GetTopicAttributesRequest extends Request
{
    /**
     * @param array{TopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
