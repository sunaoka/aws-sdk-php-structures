<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $HttpEndpoint
 * @property 'enabled'|'disabled'|null $HttpProtocolIpv6
 * @property int<1, 64>|null $HttpPutResponseHopLimit
 * @property 'optional'|'required'|null $HttpTokens
 * @property 'enabled'|'disabled'|null $InstanceMetadataTags
 */
class InstanceMetadataOptionsRequest extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: 'enabled'|'disabled'|null,
     *     HttpProtocolIpv6?: 'enabled'|'disabled'|null,
     *     HttpPutResponseHopLimit?: int<1, 64>|null,
     *     HttpTokens?: 'optional'|'required'|null,
     *     InstanceMetadataTags?: 'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
