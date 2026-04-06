<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $resourceGatewayId
 * @property string|null $resourceConfigurationGroupId
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null $type
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property list<string>|null $portRanges
 * @property 'TCP'|null $protocol
 * @property string|null $customDomainName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property bool|null $amazonManaged
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $domainVerificationId
 * @property string|null $domainVerificationArn
 * @property 'VERIFIED'|'PENDING'|'VERIFICATION_TIMED_OUT'|null $domainVerificationStatus
 * @property string|null $groupDomain
 */
class GetResourceConfigurationResponse extends Response
{
}
