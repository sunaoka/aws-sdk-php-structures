<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property list<Shapes\IngestionJobFilter>|null $filters
 * @property string $knowledgeBaseId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\IngestionJobSortBy|null $sortBy
 */
class ListIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     filters?: list<Shapes\IngestionJobFilter>|null,
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: Shapes\IngestionJobSortBy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
