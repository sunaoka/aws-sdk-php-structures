<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByOwnedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DistributionId
 * @property string $OwnerAccountId
 */
class DistributionIdOwner extends Shape
{
    /**
     * @param array{
     *     DistributionId: string,
     *     OwnerAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
