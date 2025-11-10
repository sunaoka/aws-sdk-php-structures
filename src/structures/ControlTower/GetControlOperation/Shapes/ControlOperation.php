<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetControlOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'|null $operationType
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property string|null $statusMessage
 * @property string|null $operationIdentifier
 * @property string|null $controlIdentifier
 * @property string|null $targetIdentifier
 * @property string|null $enabledControlIdentifier
 */
class ControlOperation extends Shape
{
    /**
     * @param array{
     *     operationType?: 'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null,
     *     statusMessage?: string|null,
     *     operationIdentifier?: string|null,
     *     controlIdentifier?: string|null,
     *     targetIdentifier?: string|null,
     *     enabledControlIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
