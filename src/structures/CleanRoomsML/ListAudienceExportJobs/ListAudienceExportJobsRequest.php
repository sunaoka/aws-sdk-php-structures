<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $audienceGenerationJobArn
 */
class ListAudienceExportJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     audienceGenerationJobArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
