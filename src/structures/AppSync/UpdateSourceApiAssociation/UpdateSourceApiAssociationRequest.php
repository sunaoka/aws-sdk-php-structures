<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateSourceApiAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $associationId
 * @property string $mergedApiIdentifier
 * @property string|null $description
 * @property Shapes\SourceApiAssociationConfig|null $sourceApiAssociationConfig
 */
class UpdateSourceApiAssociationRequest extends Request
{
    /**
     * @param array{
     *     associationId: string,
     *     mergedApiIdentifier: string,
     *     description?: string|null,
     *     sourceApiAssociationConfig?: Shapes\SourceApiAssociationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
