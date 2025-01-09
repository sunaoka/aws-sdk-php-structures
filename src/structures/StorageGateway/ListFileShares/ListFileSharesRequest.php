<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $Limit
 * @property string $Marker
 */
class ListFileSharesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN?: string,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
