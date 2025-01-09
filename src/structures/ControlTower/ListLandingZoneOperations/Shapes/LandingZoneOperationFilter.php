<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'> $statuses
 * @property list<'DELETE'|'CREATE'|'UPDATE'|'RESET'> $types
 */
class LandingZoneOperationFilter extends Shape
{
    /**
     * @param array{
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>,
     *     types?: list<'DELETE'|'CREATE'|'UPDATE'|'RESET'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
