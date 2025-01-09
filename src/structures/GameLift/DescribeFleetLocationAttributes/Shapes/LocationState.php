<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property 'NEW'|'DOWNLOADING'|'VALIDATING'|'BUILDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'ERROR'|'TERMINATED'|'NOT_FOUND' $Status
 */
class LocationState extends Shape
{
    /**
     * @param array{
     *     Location?: string,
     *     Status?: 'NEW'|'DOWNLOADING'|'VALIDATING'|'BUILDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'ERROR'|'TERMINATED'|'NOT_FOUND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
