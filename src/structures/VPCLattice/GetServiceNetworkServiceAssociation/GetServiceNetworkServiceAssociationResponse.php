<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $customDomainName
 * @property Shapes\DnsEntry $dnsEntry
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property string $serviceArn
 * @property string $serviceId
 * @property string $serviceName
 * @property string $serviceNetworkArn
 * @property string $serviceNetworkId
 * @property string $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class GetServiceNetworkServiceAssociationResponse extends Response
{
}
