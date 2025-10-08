<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Configuration|null $s3
 * @property list<ToolDefinition>|null $inlinePayload
 */
class ToolSchema extends Shape
{
    /**
     * @param array{
     *     s3?: S3Configuration|null,
     *     inlinePayload?: list<ToolDefinition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
