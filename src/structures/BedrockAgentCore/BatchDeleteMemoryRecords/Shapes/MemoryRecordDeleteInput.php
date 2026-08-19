<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchDeleteMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 * @property string|null $namespace
 */
class MemoryRecordDeleteInput extends Shape
{
    /**
     * @param array{
     *     memoryRecordId: string,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
