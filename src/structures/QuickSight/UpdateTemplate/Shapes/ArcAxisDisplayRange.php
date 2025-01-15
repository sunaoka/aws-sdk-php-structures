<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Min
 * @property double|null $Max
 */
class ArcAxisDisplayRange extends Shape
{
    /**
     * @param array{
     *     Min?: double|null,
     *     Max?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
