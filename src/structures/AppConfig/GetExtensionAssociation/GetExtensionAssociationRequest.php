<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtensionAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionAssociationId
 */
class GetExtensionAssociationRequest extends Request
{
    /**
     * @param array{ExtensionAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
