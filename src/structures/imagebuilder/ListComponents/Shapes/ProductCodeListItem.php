<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productCodeId
 * @property 'marketplace' $productCodeType
 */
class ProductCodeListItem extends Shape
{
    /**
     * @param array{
     *     productCodeId: string,
     *     productCodeType: 'marketplace'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
