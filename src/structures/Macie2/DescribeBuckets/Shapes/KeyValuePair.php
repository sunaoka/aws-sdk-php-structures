<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $value
 */
class KeyValuePair extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
