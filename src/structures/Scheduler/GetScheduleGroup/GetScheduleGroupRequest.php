<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetScheduleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetScheduleGroupRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
