<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeSchedulingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $shareIdentifier
 * @property float|null $weightFactor
 */
class ShareAttributes extends Shape
{
    /**
     * @param array{
     *     shareIdentifier: string,
     *     weightFactor?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
