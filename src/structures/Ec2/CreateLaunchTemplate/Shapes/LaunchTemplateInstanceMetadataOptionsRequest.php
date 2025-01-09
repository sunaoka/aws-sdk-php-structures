<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'optional'|'required' $HttpTokens
 * @property int $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled' $HttpEndpoint
 * @property 'disabled'|'enabled' $HttpProtocolIpv6
 * @property 'disabled'|'enabled' $InstanceMetadataTags
 */
class LaunchTemplateInstanceMetadataOptionsRequest extends Shape
{
    /**
     * @param array{
     *     HttpTokens?: 'optional'|'required',
     *     HttpPutResponseHopLimit?: int,
     *     HttpEndpoint?: 'disabled'|'enabled',
     *     HttpProtocolIpv6?: 'disabled'|'enabled',
     *     InstanceMetadataTags?: 'disabled'|'enabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
