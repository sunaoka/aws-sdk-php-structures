<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDetectMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArnForLogging
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED' $logLevel
 */
class EnableIoTLoggingParams extends Shape
{
    /**
     * @param array{
     *     roleArnForLogging: string,
     *     logLevel: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
