<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $failureCode
 * @property string|null $failureReason
 * @property string|null $id
 * @property bool|null $isManagedAssociation
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property Shapes\DnsEntry|null $privateDnsEntry
 * @property string|null $resourceConfigurationArn
 * @property string|null $resourceConfigurationId
 * @property string|null $resourceConfigurationName
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class GetServiceNetworkResourceAssociationResponse extends Response
{
}
