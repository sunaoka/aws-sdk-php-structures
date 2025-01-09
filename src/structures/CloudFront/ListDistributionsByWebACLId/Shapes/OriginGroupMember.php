<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OriginId
 */
class OriginGroupMember extends Shape
{
    /**
     * @param array{OriginId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
