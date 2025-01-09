<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property int $Max
 */
class Limit extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Max?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
