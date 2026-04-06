<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceAssociationIdentifier
 * @property string $membershipIdentifier
 */
class GetIdNamespaceAssociationRequest extends Request
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
