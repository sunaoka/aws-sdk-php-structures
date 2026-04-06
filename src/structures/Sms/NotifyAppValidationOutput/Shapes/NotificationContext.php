<?php

namespace Sunaoka\Aws\Structures\Sms\NotifyAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $validationId
 * @property 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $statusMessage
 */
class NotificationContext extends Shape
{
    /**
     * @param array{
     *     validationId?: string|null,
     *     status?: 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
