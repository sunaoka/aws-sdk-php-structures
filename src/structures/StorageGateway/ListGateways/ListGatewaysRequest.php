<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int $Limit
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
