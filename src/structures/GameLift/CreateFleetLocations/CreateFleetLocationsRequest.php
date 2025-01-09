<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleetLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property list<Shapes\LocationConfiguration> $Locations
 */
class CreateFleetLocationsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Locations: list<Shapes\LocationConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
