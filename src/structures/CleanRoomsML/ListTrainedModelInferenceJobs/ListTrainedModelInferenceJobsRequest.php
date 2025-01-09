<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModelInferenceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $membershipIdentifier
 * @property string $trainedModelArn
 */
class ListTrainedModelInferenceJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     membershipIdentifier: string,
     *     trainedModelArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
