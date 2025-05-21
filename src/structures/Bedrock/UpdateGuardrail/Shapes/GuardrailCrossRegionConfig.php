<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailProfileIdentifier
 */
class GuardrailCrossRegionConfig extends Shape
{
    /**
     * @param array{guardrailProfileIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
