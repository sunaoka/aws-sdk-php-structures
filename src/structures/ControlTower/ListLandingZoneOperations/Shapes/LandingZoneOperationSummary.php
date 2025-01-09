<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operationIdentifier
 * @property 'DELETE'|'CREATE'|'UPDATE'|'RESET' $operationType
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS' $status
 */
class LandingZoneOperationSummary extends Shape
{
    /**
     * @param array{
     *     operationIdentifier?: string,
     *     operationType?: 'DELETE'|'CREATE'|'UPDATE'|'RESET',
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
