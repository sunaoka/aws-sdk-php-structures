<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListDeploymentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $filters
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListDeploymentJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
