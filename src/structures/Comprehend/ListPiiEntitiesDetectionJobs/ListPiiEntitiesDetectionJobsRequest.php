<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListPiiEntitiesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PiiEntitiesDetectionJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListPiiEntitiesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\PiiEntitiesDetectionJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
