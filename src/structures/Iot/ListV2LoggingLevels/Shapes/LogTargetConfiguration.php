<?php

namespace Sunaoka\Aws\Structures\Iot\ListV2LoggingLevels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogTarget $logTarget
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED' $logLevel
 */
class LogTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     logTarget?: LogTarget,
     *     logLevel?: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
