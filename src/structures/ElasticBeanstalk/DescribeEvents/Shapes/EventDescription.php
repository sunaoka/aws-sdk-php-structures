<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $EventDate
 * @property string|null $Message
 * @property string|null $ApplicationName
 * @property string|null $VersionLabel
 * @property string|null $TemplateName
 * @property string|null $EnvironmentName
 * @property string|null $PlatformArn
 * @property string|null $RequestId
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null $Severity
 */
class EventDescription extends Shape
{
    /**
     * @param array{
     *     EventDate?: \Aws\Api\DateTimeResult|null,
     *     Message?: string|null,
     *     ApplicationName?: string|null,
     *     VersionLabel?: string|null,
     *     TemplateName?: string|null,
     *     EnvironmentName?: string|null,
     *     PlatformArn?: string|null,
     *     RequestId?: string|null,
     *     Severity?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
