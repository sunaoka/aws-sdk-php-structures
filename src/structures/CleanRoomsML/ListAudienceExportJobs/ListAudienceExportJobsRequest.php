<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $audienceGenerationJobArn
 */
class ListAudienceExportJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     audienceGenerationJobArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
