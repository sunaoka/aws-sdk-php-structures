<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property list<string>|null $securityGroupIds
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|null $status
 * @property string|null $vpcId
 */
class GetServiceNetworkVpcAssociationResponse extends Response
{
}
