<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFilter|null $filter
 * @property int<1, 100>|null $numberOfResults
 * @property 'HYBRID'|'SEMANTIC'|null $overrideSearchType
 */
class KnowledgeBaseVectorSearchConfiguration extends Shape
{
    /**
     * @param array{
     *     filter?: RetrievalFilter|null,
     *     numberOfResults?: int<1, 100>|null,
     *     overrideSearchType?: 'HYBRID'|'SEMANTIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
