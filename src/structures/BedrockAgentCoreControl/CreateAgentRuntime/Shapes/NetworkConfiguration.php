<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'VPC' $networkMode
 * @property VpcConfig|null $networkModeConfig
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     networkMode: 'PUBLIC'|'VPC',
     *     networkModeConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
