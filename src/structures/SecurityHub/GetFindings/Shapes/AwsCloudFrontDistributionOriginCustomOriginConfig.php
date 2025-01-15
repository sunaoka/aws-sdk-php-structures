<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $HttpPort
 * @property int|null $HttpsPort
 * @property int|null $OriginKeepaliveTimeout
 * @property string|null $OriginProtocolPolicy
 * @property int|null $OriginReadTimeout
 * @property AwsCloudFrontDistributionOriginSslProtocols|null $OriginSslProtocols
 */
class AwsCloudFrontDistributionOriginCustomOriginConfig extends Shape
{
    /**
     * @param array{
     *     HttpPort?: int|null,
     *     HttpsPort?: int|null,
     *     OriginKeepaliveTimeout?: int|null,
     *     OriginProtocolPolicy?: string|null,
     *     OriginReadTimeout?: int|null,
     *     OriginSslProtocols?: AwsCloudFrontDistributionOriginSslProtocols|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
