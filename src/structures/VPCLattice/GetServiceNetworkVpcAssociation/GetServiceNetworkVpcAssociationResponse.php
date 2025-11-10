<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|null $status
 * @property string|null $arn
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property string|null $serviceNetworkArn
 * @property string|null $vpcId
 * @property list<string>|null $securityGroupIds
 * @property bool|null $privateDnsEnabled
 * @property string|null $failureMessage
 * @property string|null $failureCode
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property Shapes\DnsOptions|null $dnsOptions
 */
class GetServiceNetworkVpcAssociationResponse extends Response
{
}
