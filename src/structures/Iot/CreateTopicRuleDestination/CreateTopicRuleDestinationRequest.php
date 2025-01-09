<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TopicRuleDestinationConfiguration $destinationConfiguration
 */
class CreateTopicRuleDestinationRequest extends Request
{
    /**
     * @param array{destinationConfiguration: Shapes\TopicRuleDestinationConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
