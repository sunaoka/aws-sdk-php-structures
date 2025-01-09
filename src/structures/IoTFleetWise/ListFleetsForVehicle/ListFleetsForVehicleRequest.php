<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListFleetsForVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListFleetsForVehicleRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
