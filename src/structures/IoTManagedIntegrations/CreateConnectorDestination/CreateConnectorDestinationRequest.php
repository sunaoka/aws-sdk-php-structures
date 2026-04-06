<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateConnectorDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string $CloudConnectorId
 * @property 'OAUTH'|null $AuthType
 * @property Shapes\AuthConfig $AuthConfig
 * @property Shapes\SecretsManager|null $SecretsManager
 * @property string|null $ClientToken
 */
class CreateConnectorDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CloudConnectorId: string,
     *     AuthType?: 'OAUTH'|null,
     *     AuthConfig: Shapes\AuthConfig,
     *     SecretsManager?: Shapes\SecretsManager|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
