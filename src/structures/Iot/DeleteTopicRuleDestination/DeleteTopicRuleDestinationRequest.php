<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteTopicRuleDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteTopicRuleDestinationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
