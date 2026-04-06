<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR'|'INFO' $LogLevel
 * @property 'userNotification'|'userAuthEvents' $EventSource
 * @property CloudWatchLogsConfigurationType|null $CloudWatchLogsConfiguration
 * @property S3ConfigurationType|null $S3Configuration
 * @property FirehoseConfigurationType|null $FirehoseConfiguration
 */
class LogConfigurationType extends Shape
{
    /**
     * @param array{
     *     LogLevel: 'ERROR'|'INFO',
     *     EventSource: 'userNotification'|'userAuthEvents',
     *     CloudWatchLogsConfiguration?: CloudWatchLogsConfigurationType|null,
     *     S3Configuration?: S3ConfigurationType|null,
     *     FirehoseConfiguration?: FirehoseConfigurationType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
