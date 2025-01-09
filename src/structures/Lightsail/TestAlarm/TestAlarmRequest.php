<?php

namespace Sunaoka\Aws\Structures\Lightsail\TestAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmName
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $state
 */
class TestAlarmRequest extends Request
{
    /**
     * @param array{
     *     alarmName: string,
     *     state: 'OK'|'ALARM'|'INSUFFICIENT_DATA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
