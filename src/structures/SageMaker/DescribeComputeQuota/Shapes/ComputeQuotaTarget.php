<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TeamName
 * @property int $FairShareWeight
 */
class ComputeQuotaTarget extends Shape
{
    /**
     * @param array{
     *     TeamName: string,
     *     FairShareWeight?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
