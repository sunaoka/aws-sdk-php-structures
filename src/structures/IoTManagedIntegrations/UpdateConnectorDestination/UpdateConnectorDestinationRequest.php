<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateConnectorDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Description
 * @property string|null $Name
 * @property 'OAUTH'|null $AuthType
 * @property Shapes\AuthConfigUpdate|null $AuthConfig
 * @property Shapes\SecretsManager|null $SecretsManager
 */
class UpdateConnectorDestinationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Description?: string|null,
     *     Name?: string|null,
     *     AuthType?: 'OAUTH'|null,
     *     AuthConfig?: Shapes\AuthConfigUpdate|null,
     *     SecretsManager?: Shapes\SecretsManager|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
