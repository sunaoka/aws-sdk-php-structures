<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR' $LogLevel
 * @property 'userNotification' $EventSource
 * @property CloudWatchLogsConfigurationType|null $CloudWatchLogsConfiguration
 */
class LogConfigurationType extends Shape
{
    /**
     * @param array{
     *     LogLevel: 'ERROR',
     *     EventSource: 'userNotification',
     *     CloudWatchLogsConfiguration?: CloudWatchLogsConfigurationType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
