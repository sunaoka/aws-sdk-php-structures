<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAlarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alarmName
 * @property string|null $pageToken
 * @property string|null $monitoredResourceName
 */
class GetAlarmsRequest extends Request
{
    /**
     * @param array{
     *     alarmName?: string|null,
     *     pageToken?: string|null,
     *     monitoredResourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
