<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $billedMemoryUsedInMB
 * @property int<0, max> $billedDurationInMilliseconds
 */
class BillingDetails extends Shape
{
    /**
     * @param array{
     *     billedMemoryUsedInMB?: int<0, max>,
     *     billedDurationInMilliseconds?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
