<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRateLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $rate
 * @property 'second'|'minute' $period
 */
class RateConfig extends Shape
{
    /**
     * @param array{
     *     rate: double,
     *     period: 'second'|'minute'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
