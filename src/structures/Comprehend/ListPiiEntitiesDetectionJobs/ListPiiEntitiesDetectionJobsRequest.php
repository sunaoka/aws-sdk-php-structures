<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListPiiEntitiesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PiiEntitiesDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListPiiEntitiesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\PiiEntitiesDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
