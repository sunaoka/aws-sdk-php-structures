<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceGenerationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $configuredAudienceModelArn
 * @property string $collaborationId
 */
class ListAudienceGenerationJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     configuredAudienceModelArn?: string,
     *     collaborationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
