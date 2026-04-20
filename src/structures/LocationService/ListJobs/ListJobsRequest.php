<?php

namespace Sunaoka\Aws\Structures\LocationService\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\JobsFilter|null $Filter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\JobsFilter|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
