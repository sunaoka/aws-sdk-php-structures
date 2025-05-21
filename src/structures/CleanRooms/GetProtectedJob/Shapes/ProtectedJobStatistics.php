<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalDurationInMillis
 * @property BilledJobResourceUtilization|null $billedResourceUtilization
 */
class ProtectedJobStatistics extends Shape
{
    /**
     * @param array{
     *     totalDurationInMillis?: int|null,
     *     billedResourceUtilization?: BilledJobResourceUtilization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
