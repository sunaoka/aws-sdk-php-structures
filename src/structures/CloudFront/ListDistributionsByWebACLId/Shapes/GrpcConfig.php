<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class GrpcConfig extends Shape
{
    /**
     * @param array{Enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
