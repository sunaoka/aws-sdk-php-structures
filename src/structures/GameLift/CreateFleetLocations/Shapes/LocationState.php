<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleetLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property 'NEW'|'DOWNLOADING'|'VALIDATING'|'BUILDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'ERROR'|'TERMINATED'|'NOT_FOUND'|null $Status
 */
class LocationState extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     Status?: 'NEW'|'DOWNLOADING'|'VALIDATING'|'BUILDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'ERROR'|'TERMINATED'|'NOT_FOUND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
