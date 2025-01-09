<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalDurationInMillis
 * @property BilledResourceUtilization $billedResourceUtilization
 */
class ProtectedQueryStatistics extends Shape
{
    /**
     * @param array{
     *     totalDurationInMillis?: int,
     *     billedResourceUtilization?: BilledResourceUtilization
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
