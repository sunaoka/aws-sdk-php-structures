<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Country
 * @property string|null $State
 * @property string|null $County
 * @property string|null $City
 * @property string|null $PostCode
 */
class GeocoderHierarchy extends Shape
{
    /**
     * @param array{
     *     Country?: string|null,
     *     State?: string|null,
     *     County?: string|null,
     *     City?: string|null,
     *     PostCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
