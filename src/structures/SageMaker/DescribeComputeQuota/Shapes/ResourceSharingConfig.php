<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Lend'|'DontLend'|'LendAndBorrow' $Strategy
 * @property int $BorrowLimit
 */
class ResourceSharingConfig extends Shape
{
    /**
     * @param array{
     *     Strategy: 'Lend'|'DontLend'|'LendAndBorrow',
     *     BorrowLimit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
