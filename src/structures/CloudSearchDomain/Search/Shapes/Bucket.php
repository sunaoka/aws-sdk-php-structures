<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property int $count
 */
class Bucket extends Shape
{
    /**
     * @param array{
     *     value?: string,
     *     count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
