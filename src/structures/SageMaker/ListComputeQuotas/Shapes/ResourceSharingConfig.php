<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListComputeQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Lend'|'DontLend'|'LendAndBorrow' $Strategy
 * @property int<0, 10000>|null $BorrowLimit
 * @property list<ComputeQuotaResourceConfig>|null $AbsoluteBorrowLimits
 */
class ResourceSharingConfig extends Shape
{
    /**
     * @param array{
     *     Strategy: 'Lend'|'DontLend'|'LendAndBorrow',
     *     BorrowLimit?: int<0, 10000>|null,
     *     AbsoluteBorrowLimits?: list<ComputeQuotaResourceConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
