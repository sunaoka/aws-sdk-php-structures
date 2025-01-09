<?php

namespace Sunaoka\Aws\Structures\CloudWatch\EnableAlarmActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AlarmNames
 */
class EnableAlarmActionsRequest extends Request
{
    /**
     * @param array{AlarmNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
