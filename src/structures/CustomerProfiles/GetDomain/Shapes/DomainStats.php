<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ProfileCount
 * @property int|null $MeteringProfileCount
 * @property int|null $ObjectCount
 * @property int|null $TotalSize
 */
class DomainStats extends Shape
{
    /**
     * @param array{
     *     ProfileCount?: int|null,
     *     MeteringProfileCount?: int|null,
     *     ObjectCount?: int|null,
     *     TotalSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
