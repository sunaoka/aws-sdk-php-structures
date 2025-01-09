<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ProfileCount
 * @property int $MeteringProfileCount
 * @property int $ObjectCount
 * @property int $TotalSize
 */
class DomainStats extends Shape
{
    /**
     * @param array{
     *     ProfileCount?: int,
     *     MeteringProfileCount?: int,
     *     ObjectCount?: int,
     *     TotalSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
