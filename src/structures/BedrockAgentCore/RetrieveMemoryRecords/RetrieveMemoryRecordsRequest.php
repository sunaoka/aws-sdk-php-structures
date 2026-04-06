<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\RetrieveMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $namespace
 * @property Shapes\SearchCriteria $searchCriteria
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class RetrieveMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     namespace: string,
     *     searchCriteria: Shapes\SearchCriteria,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
