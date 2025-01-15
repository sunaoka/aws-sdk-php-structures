<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListConfigurationHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceGroupName
 * @property string|null $AccountId
 * @property string|null $MonitoredResourceARN
 * @property 'INFO'|'WARN'|'ERROR'|null $EventStatus
 * @property 'CLOUDWATCH_ALARM'|'CLOUDWATCH_LOG'|'CLOUDFORMATION'|'SSM_ASSOCIATION'|null $EventResourceType
 * @property \Aws\Api\DateTimeResult|null $EventTime
 * @property string|null $EventDetail
 * @property string|null $EventResourceName
 */
class ConfigurationEvent extends Shape
{
    /**
     * @param array{
     *     ResourceGroupName?: string|null,
     *     AccountId?: string|null,
     *     MonitoredResourceARN?: string|null,
     *     EventStatus?: 'INFO'|'WARN'|'ERROR'|null,
     *     EventResourceType?: 'CLOUDWATCH_ALARM'|'CLOUDWATCH_LOG'|'CLOUDFORMATION'|'SSM_ASSOCIATION'|null,
     *     EventTime?: \Aws\Api\DateTimeResult|null,
     *     EventDetail?: string|null,
     *     EventResourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
