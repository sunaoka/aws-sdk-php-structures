<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaselineOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $operationIdentifier
 * @property 'ENABLE_BASELINE'|'DISABLE_BASELINE'|'UPDATE_ENABLED_BASELINE'|'RESET_ENABLED_BASELINE' $operationType
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS' $status
 * @property string $statusMessage
 */
class BaselineOperation extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     operationIdentifier?: string,
     *     operationType?: 'ENABLE_BASELINE'|'DISABLE_BASELINE'|'UPDATE_ENABLED_BASELINE'|'RESET_ENABLED_BASELINE',
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
