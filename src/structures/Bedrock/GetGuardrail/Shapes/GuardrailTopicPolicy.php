<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailTopic> $topics
 */
class GuardrailTopicPolicy extends Shape
{
    /**
     * @param array{topics: list<GuardrailTopic>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
