<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpEndpoint
 * @property string $HttpProtocolIpv6
 * @property string $HttpTokens
 * @property int $HttpPutResponseHopLimit
 * @property string $InstanceMetadataTags
 */
class AwsEc2LaunchTemplateDataMetadataOptionsDetails extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string,
     *     HttpProtocolIpv6?: string,
     *     HttpTokens?: string,
     *     HttpPutResponseHopLimit?: int,
     *     InstanceMetadataTags?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
