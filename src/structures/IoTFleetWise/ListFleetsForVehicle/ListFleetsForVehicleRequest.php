<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListFleetsForVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListFleetsForVehicleRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
