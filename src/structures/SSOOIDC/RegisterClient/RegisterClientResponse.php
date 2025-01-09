<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\RegisterClient;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property int $clientIdIssuedAt
 * @property int $clientSecretExpiresAt
 * @property string $authorizationEndpoint
 * @property string $tokenEndpoint
 */
class RegisterClientResponse extends Response
{
}
