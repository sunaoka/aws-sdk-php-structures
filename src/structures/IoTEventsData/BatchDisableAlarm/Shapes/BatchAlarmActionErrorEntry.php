<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDisableAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $requestId
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException'|null $errorCode
 * @property string|null $errorMessage
 */
class BatchAlarmActionErrorEntry extends Shape
{
    /**
     * @param array{
     *     requestId?: string|null,
     *     errorCode?: 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
