<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null $operationType
 * @property string|null $operationIdentifier
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 */
class LandingZoneOperationSummary extends Shape
{
    /**
     * @param array{
     *     operationType?: 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null,
     *     operationIdentifier?: string|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
