<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateAccountAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ConnectorDestinationId
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateAccountAssociationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ConnectorDestinationId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
