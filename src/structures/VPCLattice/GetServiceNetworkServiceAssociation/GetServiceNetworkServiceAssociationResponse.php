<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $customDomainName
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property string|null $serviceArn
 * @property string|null $serviceId
 * @property string|null $serviceName
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class GetServiceNetworkServiceAssociationResponse extends Response
{
}
