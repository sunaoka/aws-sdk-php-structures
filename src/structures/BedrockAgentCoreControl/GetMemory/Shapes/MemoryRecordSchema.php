<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetadataSchemaEntry>|null $metadataSchema
 */
class MemoryRecordSchema extends Shape
{
    /**
     * @param array{metadataSchema?: list<MetadataSchemaEntry>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
