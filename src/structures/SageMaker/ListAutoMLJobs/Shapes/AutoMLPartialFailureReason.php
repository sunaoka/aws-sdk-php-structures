<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAutoMLJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PartialFailureMessage
 */
class AutoMLPartialFailureReason extends Shape
{
    /**
     * @param array{PartialFailureMessage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
