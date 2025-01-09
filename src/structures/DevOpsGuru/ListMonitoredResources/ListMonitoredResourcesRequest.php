<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListMonitoredResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListMonitoredResourcesFilters $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListMonitoredResourcesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ListMonitoredResourcesFilters,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
