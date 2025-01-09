<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException' $errorCode
 * @property string $errorMessage
 */
class BatchPutMessageErrorEntry extends Shape
{
    /**
     * @param array{
     *     messageId?: string,
     *     errorCode?: 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
