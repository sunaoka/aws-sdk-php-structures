<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehiclesInFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListVehiclesInFleetRequest extends Request
{
    /**
     * @param array{
     *     fleetId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
