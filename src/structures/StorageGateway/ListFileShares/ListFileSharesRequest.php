<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GatewayARN
 * @property int<1, max>|null $Limit
 * @property string|null $Marker
 */
class ListFileSharesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN?: string|null,
     *     Limit?: int<1, max>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
