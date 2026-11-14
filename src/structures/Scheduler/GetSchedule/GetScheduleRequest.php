<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $GroupName
 */
class GetScheduleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
