<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transitGatewayID
 * @property string $routableCIDRSpace
 * @property list<NetworkACLEntry>|null $attachmentNetworkAclConfiguration
 */
class TransitGatewayConfiguration extends Shape
{
    /**
     * @param array{
     *     transitGatewayID: string,
     *     routableCIDRSpace: string,
     *     attachmentNetworkAclConfiguration?: list<NetworkACLEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
