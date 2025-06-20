<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailTopic> $topics
 * @property GuardrailTopicsTier|null $tier
 */
class GuardrailTopicPolicy extends Shape
{
    /**
     * @param array{
     *     topics: list<GuardrailTopic>,
     *     tier?: GuardrailTopicsTier|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
