<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateComputeQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TeamName
 * @property int<0, 100> $FairShareWeight
 */
class ComputeQuotaTarget extends Shape
{
    /**
     * @param array{
     *     TeamName: string,
     *     FairShareWeight?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
