<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStoreAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 */
class TrustStoreAssociation extends Shape
{
    /**
     * @param array{ResourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
