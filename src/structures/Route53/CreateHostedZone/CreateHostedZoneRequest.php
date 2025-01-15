<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\VPC|null $VPC
 * @property string $CallerReference
 * @property Shapes\HostedZoneConfig|null $HostedZoneConfig
 * @property string|null $DelegationSetId
 */
class CreateHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VPC?: Shapes\VPC|null,
     *     CallerReference: string,
     *     HostedZoneConfig?: Shapes\HostedZoneConfig|null,
     *     DelegationSetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
