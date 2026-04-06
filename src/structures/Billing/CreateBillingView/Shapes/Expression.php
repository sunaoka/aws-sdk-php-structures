<?php

namespace Sunaoka\Aws\Structures\Billing\CreateBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DimensionValues|null $dimensions
 * @property TagValues|null $tags
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     dimensions?: DimensionValues|null,
     *     tags?: TagValues|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
