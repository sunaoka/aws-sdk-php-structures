<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HttpPort
 * @property int $HttpsPort
 * @property int $OriginKeepaliveTimeout
 * @property string $OriginProtocolPolicy
 * @property int $OriginReadTimeout
 * @property AwsCloudFrontDistributionOriginSslProtocols $OriginSslProtocols
 */
class AwsCloudFrontDistributionOriginCustomOriginConfig extends Shape
{
    /**
     * @param array{
     *     HttpPort?: int,
     *     HttpsPort?: int,
     *     OriginKeepaliveTimeout?: int,
     *     OriginProtocolPolicy?: string,
     *     OriginReadTimeout?: int,
     *     OriginSslProtocols?: AwsCloudFrontDistributionOriginSslProtocols
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
