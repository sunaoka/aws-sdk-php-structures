<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationName
 * @property string|null $VersionLabel
 * @property string|null $TemplateName
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 * @property string|null $PlatformArn
 * @property string|null $RequestId
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null $Severity
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, 1000>|null $MaxRecords
 * @property string|null $NextToken
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     VersionLabel?: string|null,
     *     TemplateName?: string|null,
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null,
     *     PlatformArn?: string|null,
     *     RequestId?: string|null,
     *     Severity?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxRecords?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
