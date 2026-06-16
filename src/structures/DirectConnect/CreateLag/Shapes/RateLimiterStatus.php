<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateLag\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $maxAllowed
 * @property int|null $inUse
 * @property int|null $remaining
 * @property string|null $totalBandwidth
 */
class RateLimiterStatus extends Shape
{
    /**
     * @param array{
     *     maxAllowed?: int|null,
     *     inUse?: int|null,
     *     remaining?: int|null,
     *     totalBandwidth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
