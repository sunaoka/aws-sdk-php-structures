<?php

namespace Sunaoka\Aws\Structures\Route53\DisassociateVPCFromHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property Shapes\VPC $VPC
 * @property string $Comment
 */
class DisassociateVPCFromHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     VPC: Shapes\VPC,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
