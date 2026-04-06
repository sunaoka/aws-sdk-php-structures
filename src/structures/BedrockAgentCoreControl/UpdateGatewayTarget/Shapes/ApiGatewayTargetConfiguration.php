<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $restApiId
 * @property string $stage
 * @property ApiGatewayToolConfiguration $apiGatewayToolConfiguration
 */
class ApiGatewayTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     restApiId: string,
     *     stage: string,
     *     apiGatewayToolConfiguration: ApiGatewayToolConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
