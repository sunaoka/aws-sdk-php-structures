<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property Shapes\DnsEntry $dnsEntry
 * @property string $failureCode
 * @property string $failureReason
 * @property string $id
 * @property bool $isManagedAssociation
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property Shapes\DnsEntry $privateDnsEntry
 * @property string $resourceConfigurationArn
 * @property string $resourceConfigurationId
 * @property string $resourceConfigurationName
 * @property string $serviceNetworkArn
 * @property string $serviceNetworkId
 * @property string $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class GetServiceNetworkResourceAssociationResponse extends Response
{
}
