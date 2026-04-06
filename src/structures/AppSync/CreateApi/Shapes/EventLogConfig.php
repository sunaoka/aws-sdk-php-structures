<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ERROR'|'ALL'|'INFO'|'DEBUG' $logLevel
 * @property string $cloudWatchLogsRoleArn
 */
class EventLogConfig extends Shape
{
    /**
     * @param array{
     *     logLevel: 'NONE'|'ERROR'|'ALL'|'INFO'|'DEBUG',
     *     cloudWatchLogsRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
