<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $arn
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $serviceId
 * @property string|null $serviceName
 * @property string|null $serviceArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property string|null $serviceNetworkArn
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $customDomainName
 * @property string|null $failureMessage
 * @property string|null $failureCode
 */
class GetServiceNetworkServiceAssociationResponse extends Response
{
}
