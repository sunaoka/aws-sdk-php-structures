<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HTTPPort
 * @property int $HTTPSPort
 * @property 'http-only'|'match-viewer'|'https-only' $OriginProtocolPolicy
 * @property OriginSslProtocols|null $OriginSslProtocols
 * @property int|null $OriginReadTimeout
 * @property int|null $OriginKeepaliveTimeout
 */
class CustomOriginConfig extends Shape
{
    /**
     * @param array{
     *     HTTPPort: int,
     *     HTTPSPort: int,
     *     OriginProtocolPolicy: 'http-only'|'match-viewer'|'https-only',
     *     OriginSslProtocols?: OriginSslProtocols|null,
     *     OriginReadTimeout?: int|null,
     *     OriginKeepaliveTimeout?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
