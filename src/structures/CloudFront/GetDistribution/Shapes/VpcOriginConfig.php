<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcOriginId
 * @property int $OriginReadTimeout
 * @property int $OriginKeepaliveTimeout
 */
class VpcOriginConfig extends Shape
{
    /**
     * @param array{
     *     VpcOriginId: string,
     *     OriginReadTimeout?: int,
     *     OriginKeepaliveTimeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
