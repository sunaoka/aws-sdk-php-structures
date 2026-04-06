<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'SANDBOX'|'VPC' $networkMode
 * @property VpcConfig|null $vpcConfig
 */
class CodeInterpreterNetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     networkMode: 'PUBLIC'|'SANDBOX'|'VPC',
     *     vpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
