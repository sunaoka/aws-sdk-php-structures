<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZoneOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $operationIdentifier
 * @property 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null $operationType
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property string|null $statusMessage
 */
class LandingZoneOperationDetail extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     operationIdentifier?: string|null,
     *     operationType?: 'DELETE'|'CREATE'|'UPDATE'|'RESET'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
