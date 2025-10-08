<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateConnectorDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string $CloudConnectorId
 * @property 'OAUTH' $AuthType
 * @property Shapes\AuthConfig $AuthConfig
 * @property Shapes\SecretsManager $SecretsManager
 * @property string|null $ClientToken
 */
class CreateConnectorDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CloudConnectorId: string,
     *     AuthType: 'OAUTH',
     *     AuthConfig: Shapes\AuthConfig,
     *     SecretsManager: Shapes\SecretsManager,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
