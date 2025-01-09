<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property list<string> $securityGroupIds
 * @property string $serviceNetworkArn
 * @property string $serviceNetworkId
 * @property string $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED' $status
 * @property string $vpcId
 */
class GetServiceNetworkVpcAssociationResponse extends Response
{
}
