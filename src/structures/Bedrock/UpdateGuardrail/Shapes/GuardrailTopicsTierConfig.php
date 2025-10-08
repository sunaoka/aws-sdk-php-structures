<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASSIC'|'STANDARD' $tierName
 */
class GuardrailTopicsTierConfig extends Shape
{
    /**
     * @param array{tierName: 'CLASSIC'|'STANDARD'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
