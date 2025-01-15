<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string $Name
 */
class GetScheduleRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
