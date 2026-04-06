<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetAccountAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAssociationId
 */
class GetAccountAssociationRequest extends Request
{
    /**
     * @param array{AccountAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
