<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'json-file'|'syslog'|'journald'|'gelf'|'fluentd'|'awslogs'|'splunk'|'awsfirelens' $logDriver
 * @property array<string, string> $options
 * @property list<Secret> $secretOptions
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     logDriver: 'json-file'|'syslog'|'journald'|'gelf'|'fluentd'|'awslogs'|'splunk'|'awsfirelens',
     *     options?: array<string, string>,
     *     secretOptions?: list<Secret>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
