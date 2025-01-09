<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $createdBy
 * @property string $customDomainName
 * @property Shapes\DnsEntry $dnsEntry
 * @property string $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class CreateServiceNetworkServiceAssociationResponse extends Response
{
}
