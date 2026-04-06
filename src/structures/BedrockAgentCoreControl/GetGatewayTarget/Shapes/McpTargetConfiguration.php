<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiSchemaConfiguration|null $openApiSchema
 * @property ApiSchemaConfiguration|null $smithyModel
 * @property McpLambdaTargetConfiguration|null $lambda
 * @property McpServerTargetConfiguration|null $mcpServer
 * @property ApiGatewayTargetConfiguration|null $apiGateway
 */
class McpTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     openApiSchema?: ApiSchemaConfiguration|null,
     *     smithyModel?: ApiSchemaConfiguration|null,
     *     lambda?: McpLambdaTargetConfiguration|null,
     *     mcpServer?: McpServerTargetConfiguration|null,
     *     apiGateway?: ApiGatewayTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
