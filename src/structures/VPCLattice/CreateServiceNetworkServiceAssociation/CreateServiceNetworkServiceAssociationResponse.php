<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $createdBy
 * @property string|null $customDomainName
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class CreateServiceNetworkServiceAssociationResponse extends Response
{
}
