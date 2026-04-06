<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idNamespaceAssociationIdentifier
 * @property string $membershipIdentifier
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\IdMappingConfig|null $idMappingConfig
 */
class UpdateIdNamespaceAssociationRequest extends Request
{
    /**
     * @param array{
     *     idNamespaceAssociationIdentifier: string,
     *     membershipIdentifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     idMappingConfig?: Shapes\IdMappingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
