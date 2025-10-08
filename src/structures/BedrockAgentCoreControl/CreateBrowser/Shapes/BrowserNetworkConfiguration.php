<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'VPC' $networkMode
 * @property VpcConfig|null $vpcConfig
 */
class BrowserNetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     networkMode: 'PUBLIC'|'VPC',
     *     vpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
