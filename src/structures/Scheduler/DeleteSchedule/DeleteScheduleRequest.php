<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $GroupName
 * @property string $Name
 */
class DeleteScheduleRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     GroupName?: string|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
