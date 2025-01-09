<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAutoMLJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartialFailureMessage
 */
class AutoMLPartialFailureReason extends Shape
{
    /**
     * @param array{PartialFailureMessage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
