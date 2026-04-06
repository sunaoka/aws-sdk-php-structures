<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property Shapes\IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property array<string, string>|null $tags
 * @property string $name
 * @property string|null $description
 * @property Shapes\IdMappingConfig|null $idMappingConfig
 */
class CreateIdNamespaceAssociationRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     inputReferenceConfig: Shapes\IdNamespaceAssociationInputReferenceConfig,
     *     tags?: array<string, string>|null,
     *     name: string,
     *     description?: string|null,
     *     idMappingConfig?: Shapes\IdMappingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
