<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcOriginId
 * @property string|null $OwnerAccountId
 * @property int|null $OriginReadTimeout
 * @property int|null $OriginKeepaliveTimeout
 * @property 'http1.1'|'http2'|null $OriginHttpVersion
 */
class VpcOriginConfig extends Shape
{
    /**
     * @param array{
     *     VpcOriginId: string,
     *     OwnerAccountId?: string|null,
     *     OriginReadTimeout?: int|null,
     *     OriginKeepaliveTimeout?: int|null,
     *     OriginHttpVersion?: 'http1.1'|'http2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
