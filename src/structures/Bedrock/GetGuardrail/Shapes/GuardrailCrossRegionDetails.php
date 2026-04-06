<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $guardrailProfileId
 * @property string|null $guardrailProfileArn
 */
class GuardrailCrossRegionDetails extends Shape
{
    /**
     * @param array{
     *     guardrailProfileId?: string|null,
     *     guardrailProfileArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
