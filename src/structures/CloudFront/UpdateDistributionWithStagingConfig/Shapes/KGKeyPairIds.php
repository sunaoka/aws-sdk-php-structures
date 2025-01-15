<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyGroupId
 * @property KeyPairIds|null $KeyPairIds
 */
class KGKeyPairIds extends Shape
{
    /**
     * @param array{
     *     KeyGroupId?: string|null,
     *     KeyPairIds?: KeyPairIds|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
