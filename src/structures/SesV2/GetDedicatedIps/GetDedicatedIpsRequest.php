<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PoolName
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class GetDedicatedIpsRequest extends Request
{
    /**
     * @param array{
     *     PoolName?: string|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
