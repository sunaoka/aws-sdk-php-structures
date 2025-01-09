<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListPiiEntitiesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PiiEntitiesDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPiiEntitiesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\PiiEntitiesDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
