<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>|null $statuses
 * @property list<'DELETE'|'CREATE'|'UPDATE'|'RESET'>|null $types
 */
class LandingZoneOperationFilter extends Shape
{
    /**
     * @param array{
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>|null,
     *     types?: list<'DELETE'|'CREATE'|'UPDATE'|'RESET'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
