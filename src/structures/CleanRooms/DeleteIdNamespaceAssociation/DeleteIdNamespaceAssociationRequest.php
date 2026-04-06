<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceAssociationIdentifier
 * @property string $membershipIdentifier
 */
class DeleteIdNamespaceAssociationRequest extends Request
{
    /**
     * @param array{
     *     idNamespaceAssociationIdentifier: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
