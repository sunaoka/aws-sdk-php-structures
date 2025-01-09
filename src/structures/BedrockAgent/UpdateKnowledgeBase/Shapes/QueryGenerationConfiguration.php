<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200> $executionTimeoutSeconds
 * @property QueryGenerationContext $generationContext
 */
class QueryGenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     executionTimeoutSeconds?: int<1, 200>,
     *     generationContext?: QueryGenerationContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
