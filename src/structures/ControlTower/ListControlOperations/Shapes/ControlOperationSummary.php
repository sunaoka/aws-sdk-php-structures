<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $controlIdentifier
 * @property string|null $enabledControlIdentifier
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $operationIdentifier
 * @property 'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'|null $operationType
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property string|null $statusMessage
 * @property string|null $targetIdentifier
 */
class ControlOperationSummary extends Shape
{
    /**
     * @param array{
     *     controlIdentifier?: string|null,
     *     enabledControlIdentifier?: string|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     operationIdentifier?: string|null,
     *     operationType?: 'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null,
     *     statusMessage?: string|null,
     *     targetIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
