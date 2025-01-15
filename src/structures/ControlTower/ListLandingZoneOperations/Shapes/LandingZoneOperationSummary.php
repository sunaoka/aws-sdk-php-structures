<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operationIdentifier
 * @property 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null $operationType
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 */
class LandingZoneOperationSummary extends Shape
{
    /**
     * @param array{
     *     operationIdentifier?: string|null,
     *     operationType?: 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
