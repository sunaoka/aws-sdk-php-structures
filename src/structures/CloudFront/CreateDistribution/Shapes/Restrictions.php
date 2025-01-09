<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeoRestriction $GeoRestriction
 */
class Restrictions extends Shape
{
    /**
     * @param array{GeoRestriction: GeoRestriction} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
