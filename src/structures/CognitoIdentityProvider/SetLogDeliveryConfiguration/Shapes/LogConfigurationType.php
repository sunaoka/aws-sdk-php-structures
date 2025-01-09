<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR'|'INFO' $LogLevel
 * @property 'userNotification'|'userAuthEvents' $EventSource
 * @property CloudWatchLogsConfigurationType $CloudWatchLogsConfiguration
 * @property S3ConfigurationType $S3Configuration
 * @property FirehoseConfigurationType $FirehoseConfiguration
 */
class LogConfigurationType extends Shape
{
    /**
     * @param array{
     *     LogLevel: 'ERROR'|'INFO',
     *     EventSource: 'userNotification'|'userAuthEvents',
     *     CloudWatchLogsConfiguration?: CloudWatchLogsConfigurationType,
     *     S3Configuration?: S3ConfigurationType,
     *     FirehoseConfiguration?: FirehoseConfigurationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
