<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteAccountAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAssociationId
 */
class DeleteAccountAssociationRequest extends Request
{
    /**
     * @param array{AccountAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
