<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HTTPPort
 * @property int $HTTPSPort
 * @property 'http-only'|'match-viewer'|'https-only' $OriginProtocolPolicy
 * @property OriginSslProtocols $OriginSslProtocols
 * @property int $OriginReadTimeout
 * @property int $OriginKeepaliveTimeout
 */
class CustomOriginConfig extends Shape
{
    /**
     * @param array{
     *     HTTPPort: int,
     *     HTTPSPort: int,
     *     OriginProtocolPolicy: 'http-only'|'match-viewer'|'https-only',
     *     OriginSslProtocols?: OriginSslProtocols,
     *     OriginReadTimeout?: int,
     *     OriginKeepaliveTimeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
