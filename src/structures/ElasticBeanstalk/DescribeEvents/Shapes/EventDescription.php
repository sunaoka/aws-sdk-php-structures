<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $EventDate
 * @property string $Message
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property string $TemplateName
 * @property string $EnvironmentName
 * @property string $PlatformArn
 * @property string $RequestId
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL' $Severity
 */
class EventDescription extends Shape
{
    /**
     * @param array{
     *     EventDate?: \Aws\Api\DateTimeResult,
     *     Message?: string,
     *     ApplicationName?: string,
     *     VersionLabel?: string,
     *     TemplateName?: string,
     *     EnvironmentName?: string,
     *     PlatformArn?: string,
     *     RequestId?: string,
     *     Severity?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
