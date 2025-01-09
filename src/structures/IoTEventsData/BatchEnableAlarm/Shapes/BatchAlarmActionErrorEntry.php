<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchEnableAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestId
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException' $errorCode
 * @property string $errorMessage
 */
class BatchAlarmActionErrorEntry extends Shape
{
    /**
     * @param array{
     *     requestId?: string,
     *     errorCode?: 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
