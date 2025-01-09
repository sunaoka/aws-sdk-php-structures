<?php

namespace Sunaoka\Aws\Structures\Sms\NotifyAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $validationId
 * @property 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property string $statusMessage
 */
class NotificationContext extends Shape
{
    /**
     * @param array{
     *     validationId?: string,
     *     status?: 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
