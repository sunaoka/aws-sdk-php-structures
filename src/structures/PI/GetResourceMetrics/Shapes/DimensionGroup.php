<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Group
 * @property list<string> $Dimensions
 * @property int $Limit
 */
class DimensionGroup extends Shape
{
    /**
     * @param array{
     *     Group: string,
     *     Dimensions?: list<string>,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
