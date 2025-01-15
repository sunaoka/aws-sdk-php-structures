<?php

namespace Sunaoka\Aws\Structures\Route53\ListVPCAssociationAuthorizations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HostedZoneId
 * @property string|null $NextToken
 * @property list<Shapes\VPC> $VPCs
 */
class ListVPCAssociationAuthorizationsResponse extends Response
{
}
