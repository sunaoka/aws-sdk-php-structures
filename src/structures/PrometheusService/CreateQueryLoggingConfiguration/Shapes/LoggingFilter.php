<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateQueryLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $qspThreshold
 */
class LoggingFilter extends Shape
{
    /**
     * @param array{qspThreshold: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
