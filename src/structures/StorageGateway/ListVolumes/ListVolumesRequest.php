<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GatewayARN
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class ListVolumesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN?: string|null,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
