<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $billedMemoryUsedInMB
 * @property int<0, max>|null $billedDurationInMilliseconds
 */
class BillingDetails extends Shape
{
    /**
     * @param array{
     *     billedMemoryUsedInMB?: int<0, max>|null,
     *     billedDurationInMilliseconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
