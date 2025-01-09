<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteScheduleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Name
 */
class DeleteScheduleGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
