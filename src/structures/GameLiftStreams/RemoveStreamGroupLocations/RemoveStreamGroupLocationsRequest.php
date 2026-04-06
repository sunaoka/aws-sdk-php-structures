<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\RemoveStreamGroupLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<string> $Locations
 */
class RemoveStreamGroupLocationsRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Locations: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
