<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $allowAssociationToShareableServiceNetwork
 * @property bool $amazonManaged
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $customDomainName
 * @property string $failureReason
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property list<string> $portRanges
 * @property 'TCP' $protocol
 * @property Shapes\ResourceConfigurationDefinition $resourceConfigurationDefinition
 * @property string $resourceConfigurationGroupId
 * @property string $resourceGatewayId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN' $type
 */
class GetResourceConfigurationResponse extends Response
{
}
