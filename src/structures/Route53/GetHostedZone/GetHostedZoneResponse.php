<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\HostedZone $HostedZone
 * @property Shapes\DelegationSet|null $DelegationSet
 * @property list<Shapes\VPC>|null $VPCs
 */
class GetHostedZoneResponse extends Response
{
}
