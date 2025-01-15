<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModelInferenceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $membershipIdentifier
 * @property string|null $trainedModelArn
 */
class ListTrainedModelInferenceJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     membershipIdentifier: string,
     *     trainedModelArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
