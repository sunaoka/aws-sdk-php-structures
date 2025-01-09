<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironmentNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transitGatewayID
 * @property string $routableCIDRSpace
 * @property list<NetworkACLEntry> $attachmentNetworkAclConfiguration
 */
class TransitGatewayConfiguration extends Shape
{
    /**
     * @param array{
     *     transitGatewayID: string,
     *     routableCIDRSpace: string,
     *     attachmentNetworkAclConfiguration?: list<NetworkACLEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
