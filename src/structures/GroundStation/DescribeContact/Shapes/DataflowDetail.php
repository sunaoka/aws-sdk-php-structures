<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $destination
 * @property string $errorMessage
 * @property Source $source
 */
class DataflowDetail extends Shape
{
    /**
     * @param array{
     *     destination?: Destination,
     *     errorMessage?: string,
     *     source?: Source
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
