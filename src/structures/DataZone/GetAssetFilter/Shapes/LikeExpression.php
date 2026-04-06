<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property string $value
 */
class LikeExpression extends Shape
{
    /**
     * @param array{
     *     columnName: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
