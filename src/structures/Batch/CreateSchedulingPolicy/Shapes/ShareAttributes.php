<?php

namespace Sunaoka\Aws\Structures\Batch\CreateSchedulingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $shareIdentifier
 * @property float $weightFactor
 */
class ShareAttributes extends Shape
{
    /**
     * @param array{
     *     shareIdentifier: string,
     *     weightFactor?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
