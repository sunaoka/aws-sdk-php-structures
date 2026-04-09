<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $schemaVersion
 * @property string|null $inlineContent
 */
class ServerDefinition extends Shape
{
    /**
     * @param array{
     *     schemaVersion?: string|null,
     *     inlineContent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
