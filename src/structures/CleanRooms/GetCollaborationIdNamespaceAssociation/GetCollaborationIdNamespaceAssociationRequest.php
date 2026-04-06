<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $idNamespaceAssociationIdentifier
 */
class GetCollaborationIdNamespaceAssociationRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     idNamespaceAssociationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
