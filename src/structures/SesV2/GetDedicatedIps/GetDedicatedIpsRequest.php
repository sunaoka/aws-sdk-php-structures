<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property string $NextToken
 * @property int $PageSize
 */
class GetDedicatedIpsRequest extends Request
{
    /**
     * @param array{
     *     PoolName?: string,
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
