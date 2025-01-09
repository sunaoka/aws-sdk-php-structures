<?php

namespace Sunaoka\Aws\Structures\SesV2\ListDedicatedIpPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 */
class ListDedicatedIpPoolsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
