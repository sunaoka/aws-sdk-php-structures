<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OriginAccessIdentity
 */
class S3OriginConfig extends Shape
{
    /**
     * @param array{OriginAccessIdentity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
