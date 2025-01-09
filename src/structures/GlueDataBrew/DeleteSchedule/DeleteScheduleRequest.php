<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteScheduleRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
