<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedServerDefinition|null $server
 * @property UpdatedToolsDefinition|null $tools
 */
class UpdatedMcpDescriptorFields extends Shape
{
    /**
     * @param array{
     *     server?: UpdatedServerDefinition|null,
     *     tools?: UpdatedToolsDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
