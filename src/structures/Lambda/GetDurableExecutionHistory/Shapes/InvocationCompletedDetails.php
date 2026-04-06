<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 * @property string $RequestId
 * @property EventError|null $Error
 */
class InvocationCompletedDetails extends Shape
{
    /**
     * @param array{
     *     StartTimestamp: \Aws\Api\DateTimeResult,
     *     EndTimestamp: \Aws\Api\DateTimeResult,
     *     RequestId: string,
     *     Error?: EventError|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
