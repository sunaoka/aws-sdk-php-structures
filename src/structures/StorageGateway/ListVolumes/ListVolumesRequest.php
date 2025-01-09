<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class ListVolumesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN?: string,
     *     Marker?: string,
     *     Limit?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
