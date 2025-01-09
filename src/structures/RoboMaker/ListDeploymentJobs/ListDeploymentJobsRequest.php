<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListDeploymentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDeploymentJobsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
