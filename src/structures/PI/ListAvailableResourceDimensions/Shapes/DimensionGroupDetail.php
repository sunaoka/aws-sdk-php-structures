<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Group
 * @property list<DimensionDetail>|null $Dimensions
 */
class DimensionGroupDetail extends Shape
{
    /**
     * @param array{
     *     Group?: string|null,
     *     Dimensions?: list<DimensionDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
