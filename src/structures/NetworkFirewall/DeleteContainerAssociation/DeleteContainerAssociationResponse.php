<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteContainerAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContainerAssociationName
 * @property string|null $ContainerAssociationArn
 * @property 'ACTIVE'|'CREATING'|'DELETING'|null $Status
 */
class DeleteContainerAssociationResponse extends Response
{
}
