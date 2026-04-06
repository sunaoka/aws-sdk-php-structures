<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetConnectorDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $CloudConnectorId
 * @property string|null $Id
 * @property 'OAUTH'|null $AuthType
 * @property Shapes\AuthConfig|null $AuthConfig
 * @property Shapes\SecretsManager|null $SecretsManager
 * @property string|null $OAuthCompleteRedirectUrl
 */
class GetConnectorDestinationResponse extends Response
{
}
