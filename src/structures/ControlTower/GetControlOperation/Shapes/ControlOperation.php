<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetControlOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $controlIdentifier
 * @property string $enabledControlIdentifier
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $operationIdentifier
 * @property 'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL' $operationType
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS' $status
 * @property string $statusMessage
 * @property string $targetIdentifier
 */
class ControlOperation extends Shape
{
    /**
     * @param array{
     *     controlIdentifier?: string,
     *     enabledControlIdentifier?: string,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     operationIdentifier?: string,
     *     operationType?: 'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS',
     *     statusMessage?: string,
     *     targetIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
