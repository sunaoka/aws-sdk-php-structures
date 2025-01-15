<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListComputeQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TeamName
 * @property int<0, 100>|null $FairShareWeight
 */
class ComputeQuotaTarget extends Shape
{
    /**
     * @param array{
     *     TeamName: string,
     *     FairShareWeight?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
