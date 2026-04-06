<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateAccountAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAssociationId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateAccountAssociationRequest extends Request
{
    /**
     * @param array{
     *     AccountAssociationId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
