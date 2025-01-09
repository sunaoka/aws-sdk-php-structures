<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteExtensionAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionAssociationId
 */
class DeleteExtensionAssociationRequest extends Request
{
    /**
     * @param array{ExtensionAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
