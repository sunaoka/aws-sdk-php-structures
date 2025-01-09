<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     Limit?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
