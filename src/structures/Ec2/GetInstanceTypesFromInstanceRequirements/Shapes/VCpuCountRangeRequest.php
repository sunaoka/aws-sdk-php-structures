<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTypesFromInstanceRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Min
 * @property int|null $Max
 */
class VCpuCountRangeRequest extends Shape
{
    /**
     * @param array{
     *     Min: int,
     *     Max?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
