<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelInferenceJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $collaborationIdentifier
 * @property string|null $trainedModelArn
 * @property string|null $trainedModelVersionIdentifier
 */
class ListCollaborationTrainedModelInferenceJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     collaborationIdentifier: string,
     *     trainedModelArn?: string|null,
     *     trainedModelVersionIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
