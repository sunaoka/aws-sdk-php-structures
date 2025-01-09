<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListConfigurationHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceGroupName
 * @property string $AccountId
 * @property string $MonitoredResourceARN
 * @property 'INFO'|'WARN'|'ERROR' $EventStatus
 * @property 'CLOUDWATCH_ALARM'|'CLOUDWATCH_LOG'|'CLOUDFORMATION'|'SSM_ASSOCIATION' $EventResourceType
 * @property \Aws\Api\DateTimeResult $EventTime
 * @property string $EventDetail
 * @property string $EventResourceName
 */
class ConfigurationEvent extends Shape
{
    /**
     * @param array{
     *     ResourceGroupName?: string,
     *     AccountId?: string,
     *     MonitoredResourceARN?: string,
     *     EventStatus?: 'INFO'|'WARN'|'ERROR',
     *     EventResourceType?: 'CLOUDWATCH_ALARM'|'CLOUDWATCH_LOG'|'CLOUDFORMATION'|'SSM_ASSOCIATION',
     *     EventTime?: \Aws\Api\DateTimeResult,
     *     EventDetail?: string,
     *     EventResourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
