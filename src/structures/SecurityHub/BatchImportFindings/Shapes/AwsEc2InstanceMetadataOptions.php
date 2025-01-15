<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpEndpoint
 * @property string|null $HttpProtocolIpv6
 * @property int|null $HttpPutResponseHopLimit
 * @property string|null $HttpTokens
 * @property string|null $InstanceMetadataTags
 */
class AwsEc2InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string|null,
     *     HttpProtocolIpv6?: string|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpTokens?: string|null,
     *     InstanceMetadataTags?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
