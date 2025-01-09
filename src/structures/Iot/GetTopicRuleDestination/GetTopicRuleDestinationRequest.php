<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRuleDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetTopicRuleDestinationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
