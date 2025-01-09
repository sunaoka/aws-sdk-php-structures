<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetLandingZoneOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $operationIdentifier
 * @property 'DELETE'|'CREATE'|'UPDATE'|'RESET' $operationType
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS' $status
 * @property string $statusMessage
 */
class LandingZoneOperationDetail extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     operationIdentifier?: string,
     *     operationType?: 'DELETE'|'CREATE'|'UPDATE'|'RESET',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
