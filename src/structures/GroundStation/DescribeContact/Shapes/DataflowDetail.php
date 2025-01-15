<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination|null $destination
 * @property string|null $errorMessage
 * @property Source|null $source
 */
class DataflowDetail extends Shape
{
    /**
     * @param array{
     *     destination?: Destination|null,
     *     errorMessage?: string|null,
     *     source?: Source|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
