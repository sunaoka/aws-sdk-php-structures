<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property int<1, 86400>|null $timeout
 */
class StickinessConfiguration extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     timeout?: int<1, 86400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
