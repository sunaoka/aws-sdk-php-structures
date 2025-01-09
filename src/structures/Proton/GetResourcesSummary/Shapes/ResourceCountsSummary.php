<?php

namespace Sunaoka\Aws\Structures\Proton\GetResourcesSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $behindMajor
 * @property int $behindMinor
 * @property int $failed
 * @property int $total
 * @property int $upToDate
 */
class ResourceCountsSummary extends Shape
{
    /**
     * @param array{
     *     behindMajor?: int,
     *     behindMinor?: int,
     *     failed?: int,
     *     total: int,
     *     upToDate?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
