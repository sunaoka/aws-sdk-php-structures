<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteFleetLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<string> $Locations
 */
class DeleteFleetLocationsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Locations: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
