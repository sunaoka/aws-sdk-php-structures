<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyGroupId
 * @property KeyPairIds $KeyPairIds
 */
class KGKeyPairIds extends Shape
{
    /**
     * @param array{
     *     KeyGroupId?: string,
     *     KeyPairIds?: KeyPairIds
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
