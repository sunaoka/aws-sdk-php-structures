<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileResourceAssociationId
 */
class GetProfileResourceAssociationRequest extends Request
{
    /**
     * @param array{ProfileResourceAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
