<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListMonitoredResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListMonitoredResourcesFilters|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMonitoredResourcesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ListMonitoredResourcesFilters|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
