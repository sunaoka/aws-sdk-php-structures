<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $executionTimeoutSeconds
 * @property QueryGenerationContext $generationContext
 */
class QueryGenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     executionTimeoutSeconds?: int,
     *     generationContext?: QueryGenerationContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
