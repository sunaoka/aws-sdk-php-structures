<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyPreviewJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'jobStatus'|'targetId', string>|null $filters
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListPolicyPreviewJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'jobStatus'|'targetId', string>|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
