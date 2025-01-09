<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileAssociationId
 */
class GetProfileAssociationRequest extends Request
{
    /**
     * @param array{ProfileAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
