<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisableAlarmActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AlarmNames
 */
class DisableAlarmActionsRequest extends Request
{
    /**
     * @param array{AlarmNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
