<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdMappingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 */
class ListIdMappingJobsRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
