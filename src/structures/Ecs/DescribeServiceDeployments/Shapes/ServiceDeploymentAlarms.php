<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED' $status
 * @property list<string> $alarmNames
 * @property list<string> $triggeredAlarmNames
 */
class ServiceDeploymentAlarms extends Shape
{
    /**
     * @param array{
     *     status?: 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED',
     *     alarmNames?: list<string>,
     *     triggeredAlarmNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
