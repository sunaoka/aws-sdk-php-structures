<?php

namespace Sunaoka\Aws\Structures\Proton\GetResourcesSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $behindMajor
 * @property int|null $behindMinor
 * @property int|null $failed
 * @property int $total
 * @property int|null $upToDate
 */
class ResourceCountsSummary extends Shape
{
    /**
     * @param array{
     *     behindMajor?: int|null,
     *     behindMinor?: int|null,
     *     failed?: int|null,
     *     total: int,
     *     upToDate?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
