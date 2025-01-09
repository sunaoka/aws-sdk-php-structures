<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListExperiments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $project
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED' $status
 */
class ListExperimentsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     project: string,
     *     status?: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
