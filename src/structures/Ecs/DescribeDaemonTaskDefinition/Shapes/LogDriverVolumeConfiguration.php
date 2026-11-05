<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'json-file'|'syslog'|'journald'|'gelf'|'fluentd'|'awslogs'|'splunk'|'awsfirelens' $driver
 */
class LogDriverVolumeConfiguration extends Shape
{
    /**
     * @param array{driver: 'json-file'|'syslog'|'journald'|'gelf'|'fluentd'|'awslogs'|'splunk'|'awsfirelens'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
