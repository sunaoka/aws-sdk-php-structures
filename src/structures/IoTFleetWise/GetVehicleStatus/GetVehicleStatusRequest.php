<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicleStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $vehicleName
 */
class GetVehicleStatusRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     vehicleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
