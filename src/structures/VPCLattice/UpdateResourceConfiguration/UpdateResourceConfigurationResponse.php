<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $allowAssociationToShareableServiceNetwork
 * @property string $arn
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
class UpdateResourceConfigurationResponse extends Response
{
}
