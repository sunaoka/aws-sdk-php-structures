<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DimensionValues $dimensions
 * @property TagValues $tags
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     dimensions?: DimensionValues,
     *     tags?: TagValues
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
