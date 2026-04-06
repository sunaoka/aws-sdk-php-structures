<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLASSIC'|'STANDARD' $tierName
 */
class GuardrailTopicsTier extends Shape
{
    /**
     * @param array{tierName: 'CLASSIC'|'STANDARD'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
