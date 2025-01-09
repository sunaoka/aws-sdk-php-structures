<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateComputeQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Lend'|'DontLend'|'LendAndBorrow' $Strategy
 * @property int<1, 500> $BorrowLimit
 */
class ResourceSharingConfig extends Shape
{
    /**
     * @param array{
     *     Strategy: 'Lend'|'DontLend'|'LendAndBorrow',
     *     BorrowLimit?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
