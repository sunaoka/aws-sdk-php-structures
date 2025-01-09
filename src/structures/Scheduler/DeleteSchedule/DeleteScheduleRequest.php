<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GroupName
 * @property string $Name
 */
class DeleteScheduleRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     GroupName?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
