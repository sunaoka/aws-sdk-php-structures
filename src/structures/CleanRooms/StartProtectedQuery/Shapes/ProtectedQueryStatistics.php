<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalDurationInMillis
 * @property BilledResourceUtilization|null $billedResourceUtilization
 */
class ProtectedQueryStatistics extends Shape
{
    /**
     * @param array{
     *     totalDurationInMillis?: int|null,
     *     billedResourceUtilization?: BilledResourceUtilization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
