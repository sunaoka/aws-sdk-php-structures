<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string|null $namespace
 * @property string|null $namespacePath
 * @property string|null $memoryStrategyId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\MemoryMetadataFilterExpression>|null $metadataFilters
 */
class ListMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     namespace?: string|null,
     *     namespacePath?: string|null,
     *     memoryStrategyId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     metadataFilters?: list<Shapes\MemoryMetadataFilterExpression>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
