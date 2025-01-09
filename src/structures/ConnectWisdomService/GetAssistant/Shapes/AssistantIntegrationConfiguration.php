<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topicIntegrationArn
 */
class AssistantIntegrationConfiguration extends Shape
{
    /**
     * @param array{topicIntegrationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
