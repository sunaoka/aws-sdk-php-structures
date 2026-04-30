<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\RetrieveMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemoryRecordMetadataValue|null $metadataValue
 */
class MemoryRecordRightExpression extends Shape
{
    /**
     * @param array{metadataValue?: MemoryRecordMetadataValue|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
