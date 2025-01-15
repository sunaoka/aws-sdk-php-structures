<?php

namespace Sunaoka\Aws\Structures\Iot\ListV2LoggingLevels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogTarget|null $logTarget
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null $logLevel
 */
class LogTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     logTarget?: LogTarget|null,
     *     logLevel?: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
