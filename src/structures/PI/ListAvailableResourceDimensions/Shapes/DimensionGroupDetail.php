<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Group
 * @property list<DimensionDetail> $Dimensions
 */
class DimensionGroupDetail extends Shape
{
    /**
     * @param array{
     *     Group?: string,
     *     Dimensions?: list<DimensionDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
