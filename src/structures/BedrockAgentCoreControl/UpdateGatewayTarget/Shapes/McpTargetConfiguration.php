<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiSchemaConfiguration|null $openApiSchema
 * @property ApiSchemaConfiguration|null $smithyModel
 * @property McpLambdaTargetConfiguration|null $lambda
 */
class McpTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     openApiSchema?: ApiSchemaConfiguration|null,
     *     smithyModel?: ApiSchemaConfiguration|null,
     *     lambda?: McpLambdaTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
