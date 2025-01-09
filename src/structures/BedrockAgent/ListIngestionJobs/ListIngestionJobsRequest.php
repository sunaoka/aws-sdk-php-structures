<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property list<Shapes\IngestionJobFilter> $filters
 * @property string $knowledgeBaseId
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property Shapes\IngestionJobSortBy $sortBy
 */
class ListIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     filters?: list<Shapes\IngestionJobFilter>,
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     sortBy?: Shapes\IngestionJobSortBy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
