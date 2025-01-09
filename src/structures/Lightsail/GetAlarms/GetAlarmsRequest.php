<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAlarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alarmName
 * @property string $pageToken
 * @property string $monitoredResourceName
 */
class GetAlarmsRequest extends Request
{
    /**
     * @param array{
     *     alarmName?: string,
     *     pageToken?: string,
     *     monitoredResourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
