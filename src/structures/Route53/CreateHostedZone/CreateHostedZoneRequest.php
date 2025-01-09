<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\VPC $VPC
 * @property string $CallerReference
 * @property Shapes\HostedZoneConfig $HostedZoneConfig
 * @property string $DelegationSetId
 */
class CreateHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VPC?: Shapes\VPC,
     *     CallerReference: string,
     *     HostedZoneConfig?: Shapes\HostedZoneConfig,
     *     DelegationSetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
