<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $allowAssociationToShareableServiceNetwork
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property list<string>|null $portRanges
 * @property 'TCP'|null $protocol
 * @property Shapes\ResourceConfigurationDefinition|null $resourceConfigurationDefinition
 * @property string|null $resourceConfigurationGroupId
 * @property string|null $resourceGatewayId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'GROUP'|'CHILD'|'SINGLE'|'ARN'|null $type
 */
class UpdateResourceConfigurationResponse extends Response
{
}
