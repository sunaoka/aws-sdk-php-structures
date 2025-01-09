<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteVPCAssociationAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property Shapes\VPC $VPC
 */
class DeleteVPCAssociationAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     VPC: Shapes\VPC
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
