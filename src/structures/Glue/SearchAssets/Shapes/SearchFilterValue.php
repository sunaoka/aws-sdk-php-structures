<?php

namespace Sunaoka\Aws\Structures\Glue\SearchAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property int|null $LongValue
 */
class SearchFilterValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     LongValue?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
