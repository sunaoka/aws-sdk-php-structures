<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $preemptionRetriesBeforeTermination
 */
class ServiceJobPreemptionConfiguration extends Shape
{
    /**
     * @param array{preemptionRetriesBeforeTermination?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
