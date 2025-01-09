<?php

namespace Sunaoka\Aws\Structures\AppSync\GetSourceApiAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mergedApiIdentifier
 * @property string $associationId
 */
class GetSourceApiAssociationRequest extends Request
{
    /**
     * @param array{
     *     mergedApiIdentifier: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
