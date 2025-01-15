<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'applied'|null $State
 * @property 'optional'|'required'|null $HttpTokens
 * @property int|null $HttpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $HttpEndpoint
 * @property 'disabled'|'enabled'|null $HttpProtocolIpv6
 * @property 'disabled'|'enabled'|null $InstanceMetadataTags
 */
class InstanceMetadataOptionsResponse extends Shape
{
    /**
     * @param array{
     *     State?: 'pending'|'applied'|null,
     *     HttpTokens?: 'optional'|'required'|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpEndpoint?: 'disabled'|'enabled'|null,
     *     HttpProtocolIpv6?: 'disabled'|'enabled'|null,
     *     InstanceMetadataTags?: 'disabled'|'enabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
