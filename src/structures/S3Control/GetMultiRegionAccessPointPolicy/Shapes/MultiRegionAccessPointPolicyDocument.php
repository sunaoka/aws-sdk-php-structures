<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EstablishedMultiRegionAccessPointPolicy $Established
 * @property ProposedMultiRegionAccessPointPolicy $Proposed
 */
class MultiRegionAccessPointPolicyDocument extends Shape
{
    /**
     * @param array{
     *     Established?: EstablishedMultiRegionAccessPointPolicy,
     *     Proposed?: ProposedMultiRegionAccessPointPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
