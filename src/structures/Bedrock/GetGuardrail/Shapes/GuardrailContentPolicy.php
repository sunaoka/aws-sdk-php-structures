<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContentFilter>|null $filters
 * @property GuardrailContentFiltersTier|null $tier
 */
class GuardrailContentPolicy extends Shape
{
    /**
     * @param array{
     *     filters?: list<GuardrailContentFilter>|null,
     *     tier?: GuardrailContentFiltersTier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
