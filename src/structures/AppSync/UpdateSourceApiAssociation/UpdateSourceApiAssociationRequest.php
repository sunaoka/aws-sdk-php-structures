<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateSourceApiAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $associationId
 * @property string $mergedApiIdentifier
 * @property string $description
 * @property Shapes\SourceApiAssociationConfig $sourceApiAssociationConfig
 */
class UpdateSourceApiAssociationRequest extends Request
{
    /**
     * @param array{
     *     associationId: string,
     *     mergedApiIdentifier: string,
     *     description?: string,
     *     sourceApiAssociationConfig?: Shapes\SourceApiAssociationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
