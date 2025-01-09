<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntitiesDetectionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntitiesDetectionJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListEntitiesDetectionJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EntitiesDetectionJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
