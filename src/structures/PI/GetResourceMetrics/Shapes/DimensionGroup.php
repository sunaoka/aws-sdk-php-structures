<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Group
 * @property list<string>|null $Dimensions
 * @property int<1, 25>|null $Limit
 */
class DimensionGroup extends Shape
{
    /**
     * @param array{
     *     Group: string,
     *     Dimensions?: list<string>|null,
     *     Limit?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
