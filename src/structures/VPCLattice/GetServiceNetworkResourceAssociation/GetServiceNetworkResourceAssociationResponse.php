<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $resourceConfigurationId
 * @property string|null $resourceConfigurationArn
 * @property string|null $resourceConfigurationName
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkName
 * @property string|null $failureReason
 * @property string|null $failureCode
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property Shapes\DnsEntry|null $privateDnsEntry
 * @property bool|null $privateDnsEnabled
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property bool|null $isManagedAssociation
 * @property 'VERIFIED'|'PENDING'|'VERIFICATION_TIMED_OUT'|null $domainVerificationStatus
 */
class GetServiceNetworkResourceAssociationResponse extends Response
{
}
