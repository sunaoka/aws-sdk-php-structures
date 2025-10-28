<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Source|null $source
 * @property Destination|null $destination
 * @property string|null $errorMessage
 */
class DataflowDetail extends Shape
{
    /**
     * @param array{
     *     source?: Source|null,
     *     destination?: Destination|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
