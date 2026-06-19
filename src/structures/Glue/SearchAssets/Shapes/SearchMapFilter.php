<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Attribute
 * @property string $Key
 * @property SearchMapFilterValue $Value
 */
class SearchMapFilter extends Shape
{
    /**
     * @param array{
     *     Attribute: string,
     *     Key: string,
     *     Value: SearchMapFilterValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
