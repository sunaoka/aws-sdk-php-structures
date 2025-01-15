<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
