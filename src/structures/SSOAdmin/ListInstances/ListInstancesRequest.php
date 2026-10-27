<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'CURRENT_REGION'|'ALL_REGIONS'|null $RegionScope
 */
class ListInstancesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     RegionScope?: 'CURRENT_REGION'|'ALL_REGIONS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
