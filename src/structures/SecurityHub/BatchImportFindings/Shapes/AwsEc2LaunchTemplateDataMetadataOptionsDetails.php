<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpEndpoint
 * @property string|null $HttpProtocolIpv6
 * @property string|null $HttpTokens
 * @property int|null $HttpPutResponseHopLimit
 * @property string|null $InstanceMetadataTags
 */
class AwsEc2LaunchTemplateDataMetadataOptionsDetails extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string|null,
     *     HttpProtocolIpv6?: string|null,
     *     HttpTokens?: string|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     InstanceMetadataTags?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
