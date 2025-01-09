<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceGenerationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $configuredAudienceModelArn
 * @property string $collaborationId
 */
class ListAudienceGenerationJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     configuredAudienceModelArn?: string,
     *     collaborationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
