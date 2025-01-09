<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicleStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $vehicleName
 */
class GetVehicleStatusRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     vehicleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
