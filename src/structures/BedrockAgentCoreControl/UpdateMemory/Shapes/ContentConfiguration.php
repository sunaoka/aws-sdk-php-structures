<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEMORY_RECORDS' $type
 * @property 'METADATA_ONLY'|'FULL_CONTENT'|null $level
 */
class ContentConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'MEMORY_RECORDS',
     *     level?: 'METADATA_ONLY'|'FULL_CONTENT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
