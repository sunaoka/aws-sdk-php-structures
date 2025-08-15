<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property list<Shapes\IngestionJobFilter>|null $filters
 * @property Shapes\IngestionJobSortBy|null $sortBy
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     filters?: list<Shapes\IngestionJobFilter>|null,
     *     sortBy?: Shapes\IngestionJobSortBy|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
