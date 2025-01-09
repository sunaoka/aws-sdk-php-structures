<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimestreamConfiguration $TimestreamConfiguration
 */
class TargetConfiguration extends Shape
{
    /**
     * @param array{TimestreamConfiguration: TimestreamConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
