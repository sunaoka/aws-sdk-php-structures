<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $billedMemoryUsedInMB
 * @property int $billedDurationInMilliseconds
 */
class BillingDetails extends Shape
{
    /**
     * @param array{
     *     billedMemoryUsedInMB?: int,
     *     billedDurationInMilliseconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
