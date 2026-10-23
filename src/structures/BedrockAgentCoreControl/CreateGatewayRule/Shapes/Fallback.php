<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FallbackTriggers|null $triggerOn
 * @property int<50, 900000>|null $firstByteTimeoutMilliseconds
 * @property CircuitBreakerConfiguration|null $circuitBreaker
 * @property list<FallbackTarget> $targetFallback
 */
class Fallback extends Shape
{
    /**
     * @param array{
     *     triggerOn?: FallbackTriggers|null,
     *     firstByteTimeoutMilliseconds?: int<50, 900000>|null,
     *     circuitBreaker?: CircuitBreakerConfiguration|null,
     *     targetFallback: list<FallbackTarget>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
