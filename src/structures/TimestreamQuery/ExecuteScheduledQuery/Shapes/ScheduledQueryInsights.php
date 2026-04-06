<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ExecuteScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED_WITH_RATE_CONTROL'|'DISABLED' $Mode
 */
class ScheduledQueryInsights extends Shape
{
    /**
     * @param array{Mode: 'ENABLED_WITH_RATE_CONTROL'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
