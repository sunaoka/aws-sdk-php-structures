<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmName
 */
class DeleteAlarmRequest extends Request
{
    /**
     * @param array{alarmName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
