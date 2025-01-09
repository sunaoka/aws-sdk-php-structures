<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetLoggerDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Logger> $Loggers
 */
class LoggerDefinitionVersion extends Shape
{
    /**
     * @param array{Loggers?: list<Logger>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
