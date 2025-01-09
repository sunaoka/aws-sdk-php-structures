<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehiclesInFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListVehiclesInFleetRequest extends Request
{
    /**
     * @param array{
     *     fleetId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
