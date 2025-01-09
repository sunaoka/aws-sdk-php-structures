<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property string $TemplateName
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 * @property string $PlatformArn
 * @property string $RequestId
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL' $Severity
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxRecords
 * @property string $NextToken
 */
class DescribeEventsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     VersionLabel?: string,
     *     TemplateName?: string,
     *     EnvironmentId?: string,
     *     EnvironmentName?: string,
     *     PlatformArn?: string,
     *     RequestId?: string,
     *     Severity?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     MaxRecords?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
