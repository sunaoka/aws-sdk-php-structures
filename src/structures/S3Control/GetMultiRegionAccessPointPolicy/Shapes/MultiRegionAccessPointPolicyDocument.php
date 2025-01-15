<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPointPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EstablishedMultiRegionAccessPointPolicy|null $Established
 * @property ProposedMultiRegionAccessPointPolicy|null $Proposed
 */
class MultiRegionAccessPointPolicyDocument extends Shape
{
    /**
     * @param array{
     *     Established?: EstablishedMultiRegionAccessPointPolicy|null,
     *     Proposed?: ProposedMultiRegionAccessPointPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
