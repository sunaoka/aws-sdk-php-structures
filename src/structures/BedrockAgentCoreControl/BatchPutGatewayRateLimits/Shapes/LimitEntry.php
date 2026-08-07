<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\BatchPutGatewayRateLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $dimensions
 * @property list<RateConfig>|null $requests
 * @property list<RateConfig>|null $tokens
 * @property list<RateConfig>|null $connections
 */
class LimitEntry extends Shape
{
    /**
     * @param array{
     *     dimensions: array<string, string>,
     *     requests?: list<RateConfig>|null,
     *     tokens?: list<RateConfig>|null,
     *     connections?: list<RateConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
