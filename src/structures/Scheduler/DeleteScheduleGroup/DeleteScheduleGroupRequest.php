<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteScheduleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ClientToken
 */
class DeleteScheduleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
