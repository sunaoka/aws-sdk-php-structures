<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZoneOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null $operationType
 * @property string|null $operationIdentifier
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $statusMessage
 */
class LandingZoneOperationDetail extends Shape
{
    /**
     * @param array{
     *     operationType?: 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null,
     *     operationIdentifier?: string|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
