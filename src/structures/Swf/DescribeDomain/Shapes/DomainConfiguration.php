<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowExecutionRetentionPeriodInDays
 */
class DomainConfiguration extends Shape
{
    /**
     * @param array{workflowExecutionRetentionPeriodInDays: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
