<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntitiesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntitiesDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListEntitiesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EntitiesDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
