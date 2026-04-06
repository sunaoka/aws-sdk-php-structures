<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchDeleteMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 */
class MemoryRecordDeleteInput extends Shape
{
    /**
     * @param array{memoryRecordId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
