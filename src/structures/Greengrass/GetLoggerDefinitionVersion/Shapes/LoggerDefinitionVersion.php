<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetLoggerDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Logger>|null $Loggers
 */
class LoggerDefinitionVersion extends Shape
{
    /**
     * @param array{Loggers?: list<Logger>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
