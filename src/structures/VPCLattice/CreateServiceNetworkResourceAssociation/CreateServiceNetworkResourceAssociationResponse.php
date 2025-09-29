<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $createdBy
 */
class CreateServiceNetworkResourceAssociationResponse extends Response
{
}
