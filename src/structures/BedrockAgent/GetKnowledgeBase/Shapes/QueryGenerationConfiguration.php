<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200>|null $executionTimeoutSeconds
 * @property QueryGenerationContext|null $generationContext
 */
class QueryGenerationConfiguration extends Shape
{
    /**
     * @param array{
     *     executionTimeoutSeconds?: int<1, 200>|null,
     *     generationContext?: QueryGenerationContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
