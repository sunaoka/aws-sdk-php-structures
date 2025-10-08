<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $namespace
 * @property string|null $memoryStrategyId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     namespace: string,
     *     memoryStrategyId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
