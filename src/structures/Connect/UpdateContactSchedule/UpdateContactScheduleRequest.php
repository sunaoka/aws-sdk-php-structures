<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 */
class UpdateContactScheduleRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ScheduledTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
