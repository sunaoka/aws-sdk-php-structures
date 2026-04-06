<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaselineOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operationIdentifier
 * @property 'ENABLE_BASELINE'|'DISABLE_BASELINE'|'UPDATE_ENABLED_BASELINE'|'RESET_ENABLED_BASELINE'|null $operationType
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $statusMessage
 */
class BaselineOperation extends Shape
{
    /**
     * @param array{
     *     operationIdentifier?: string|null,
     *     operationType?: 'ENABLE_BASELINE'|'DISABLE_BASELINE'|'UPDATE_ENABLED_BASELINE'|'RESET_ENABLED_BASELINE'|null,
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
