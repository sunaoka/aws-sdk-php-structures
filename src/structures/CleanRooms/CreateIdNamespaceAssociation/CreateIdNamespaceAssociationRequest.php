<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdNamespaceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property Shapes\IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property array<string, string> $tags
 * @property string $name
 * @property string $description
 * @property Shapes\IdMappingConfig $idMappingConfig
 */
class CreateIdNamespaceAssociationRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     inputReferenceConfig: Shapes\IdNamespaceAssociationInputReferenceConfig,
     *     tags?: array<string, string>,
     *     name: string,
     *     description?: string,
     *     idMappingConfig?: Shapes\IdMappingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
