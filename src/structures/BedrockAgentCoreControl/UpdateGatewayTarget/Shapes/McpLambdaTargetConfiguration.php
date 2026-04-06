<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaArn
 * @property ToolSchema $toolSchema
 */
class McpLambdaTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     lambdaArn: string,
     *     toolSchema: ToolSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
