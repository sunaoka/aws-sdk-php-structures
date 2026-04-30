<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $metadataKey
 */
class MemoryRecordLeftExpression extends Shape
{
    /**
     * @param array{metadataKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
