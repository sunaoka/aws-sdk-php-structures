<?php

namespace Sunaoka\Aws\Structures\SesV2\ListMultiRegionEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $PageSize
 */
class ListMultiRegionEndpointsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
