<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $GroupName
 * @property string|null $ClientToken
 */
class DeleteScheduleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GroupName?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
