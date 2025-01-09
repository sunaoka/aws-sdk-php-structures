<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'applied' $State
 * @property 'optional'|'required' $HttpTokens
 * @property int $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled' $HttpEndpoint
 * @property 'disabled'|'enabled' $HttpProtocolIpv6
 * @property 'disabled'|'enabled' $InstanceMetadataTags
 */
class InstanceMetadataOptionsResponse extends Shape
{
    /**
     * @param array{
     *     State?: 'pending'|'applied',
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
