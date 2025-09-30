<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $resourceGatewayId
 * @property string|null $resourceConfigurationGroupId
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null $type
 * @property list<string>|null $portRanges
 * @property 'TCP'|null $protocol
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $failureReason
 */
class CreateResourceConfigurationResponse extends Response
{
}
