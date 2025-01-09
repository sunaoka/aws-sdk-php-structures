<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueHoursOfOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property string $HoursOfOperationId
 */
class UpdateQueueHoursOfOperationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     HoursOfOperationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
