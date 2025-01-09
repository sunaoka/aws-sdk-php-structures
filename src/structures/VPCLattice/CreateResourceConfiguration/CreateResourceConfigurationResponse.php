<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $allowAssociationToShareableServiceNetwork
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $failureReason
 * @property string $id
 * @property string $name
 * @property list<string> $portRanges
 * @property 'TCP' $protocol
 * @property Shapes\ResourceConfigurationDefinition $resourceConfigurationDefinition
 * @property string $resourceConfigurationGroupId
 * @property string $resourceGatewayId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN' $type
 */
class CreateResourceConfigurationResponse extends Response
{
}
