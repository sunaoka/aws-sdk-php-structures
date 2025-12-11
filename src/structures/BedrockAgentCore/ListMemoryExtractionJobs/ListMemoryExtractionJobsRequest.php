<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryExtractionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property int<1, 50>|null $maxResults
 * @property Shapes\ExtractionJobFilterInput|null $filter
 * @property string|null $nextToken
 */
class ListMemoryExtractionJobsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     maxResults?: int<1, 50>|null,
     *     filter?: Shapes\ExtractionJobFilterInput|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
