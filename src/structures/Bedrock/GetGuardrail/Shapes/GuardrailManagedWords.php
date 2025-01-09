<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROFANITY' $type
 */
class GuardrailManagedWords extends Shape
{
    /**
     * @param array{type: 'PROFANITY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
