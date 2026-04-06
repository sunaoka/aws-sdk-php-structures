<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\RetrieveMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $metadataKey
 */
class LeftExpression extends Shape
{
    /**
     * @param array{metadataKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
