<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcOriginId
 * @property int|null $OriginReadTimeout
 * @property int|null $OriginKeepaliveTimeout
 */
class VpcOriginConfig extends Shape
{
    /**
     * @param array{
     *     VpcOriginId: string,
     *     OriginReadTimeout?: int|null,
     *     OriginKeepaliveTimeout?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
