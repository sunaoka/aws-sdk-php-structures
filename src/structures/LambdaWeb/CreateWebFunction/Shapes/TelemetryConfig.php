<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingConfig|null $loggingConfig
 */
class TelemetryConfig extends Shape
{
    /**
     * @param array{loggingConfig?: LoggingConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
