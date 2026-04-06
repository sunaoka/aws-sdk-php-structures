<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetResourceExplorerSetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property IndexStatus|null $Index
 * @property ViewStatus|null $View
 */
class RegionStatus extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     Index?: IndexStatus|null,
     *     View?: ViewStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
