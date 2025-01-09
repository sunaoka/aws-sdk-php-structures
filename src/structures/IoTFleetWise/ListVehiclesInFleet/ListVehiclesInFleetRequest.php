<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehiclesInFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListVehiclesInFleetRequest extends Request
{
    /**
     * @param array{
     *     fleetId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
