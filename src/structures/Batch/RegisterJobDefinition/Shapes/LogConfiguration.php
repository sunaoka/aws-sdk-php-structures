<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'json-file'|'syslog'|'journald'|'gelf'|'fluentd'|'awslogs'|'splunk' $logDriver
 * @property array<string, string>|null $options
 * @property list<Secret>|null $secretOptions
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     logDriver: 'json-file'|'syslog'|'journald'|'gelf'|'fluentd'|'awslogs'|'splunk',
     *     options?: array<string, string>|null,
     *     secretOptions?: list<Secret>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
