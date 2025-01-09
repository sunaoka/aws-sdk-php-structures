<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpEndpoint
 * @property string $HttpProtocolIpv6
 * @property int $HttpPutResponseHopLimit
 * @property string $HttpTokens
 * @property string $InstanceMetadataTags
 */
class AwsEc2InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string,
     *     HttpProtocolIpv6?: string,
     *     HttpPutResponseHopLimit?: int,
     *     HttpTokens?: string,
     *     InstanceMetadataTags?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
