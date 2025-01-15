<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property int|null $count
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
