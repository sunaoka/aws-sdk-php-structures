<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED'|null $status
 * @property list<string>|null $alarmNames
 * @property list<string>|null $triggeredAlarmNames
 */
class ServiceDeploymentAlarms extends Shape
{
    /**
     * @param array{
     *     status?: 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED'|null,
     *     alarmNames?: list<string>|null,
     *     triggeredAlarmNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
