<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\RetrieveMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $searchQuery
 * @property string|null $memoryStrategyId
 * @property int<1, 100>|null $topK
 * @property list<MemoryMetadataFilterExpression>|null $metadataFilters
 */
class SearchCriteria extends Shape
{
    /**
     * @param array{
     *     searchQuery: string,
     *     memoryStrategyId?: string|null,
     *     topK?: int<1, 100>|null,
     *     metadataFilters?: list<MemoryMetadataFilterExpression>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
