<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaselineOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $operationIdentifier
 * @property 'ENABLE_BASELINE'|'DISABLE_BASELINE'|'UPDATE_ENABLED_BASELINE'|'RESET_ENABLED_BASELINE'|null $operationType
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property string|null $statusMessage
 */
class BaselineOperation extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     operationIdentifier?: string|null,
     *     operationType?: 'ENABLE_BASELINE'|'DISABLE_BASELINE'|'UPDATE_ENABLED_BASELINE'|'RESET_ENABLED_BASELINE'|null,
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
