<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetConnectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DistributionId
 */
class ViewerFallback extends Shape
{
    /**
     * @param array{DistributionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
