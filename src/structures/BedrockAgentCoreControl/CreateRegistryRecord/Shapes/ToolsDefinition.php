<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $protocolVersion
 * @property string|null $inlineContent
 */
class ToolsDefinition extends Shape
{
    /**
     * @param array{
     *     protocolVersion?: string|null,
     *     inlineContent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
