<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceAssociationIdentifier
 * @property string $membershipIdentifier
 * @property string $name
 * @property string $description
 * @property Shapes\IdMappingConfig $idMappingConfig
 */
class UpdateIdNamespaceAssociationRequest extends Request
{
    /**
     * @param array{
     *     idNamespaceAssociationIdentifier: string,
     *     membershipIdentifier: string,
     *     name?: string,
     *     description?: string,
     *     idMappingConfig?: Shapes\IdMappingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
