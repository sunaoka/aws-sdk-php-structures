<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DELETE'|'CREATE'|'UPDATE'|'RESET'>|null $types
 * @property list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>|null $statuses
 */
class LandingZoneOperationFilter extends Shape
{
    /**
     * @param array{
     *     types?: list<'DELETE'|'CREATE'|'UPDATE'|'RESET'>|null,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
