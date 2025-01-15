<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\RegisterClient;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $clientId
 * @property string|null $clientSecret
 * @property int|null $clientIdIssuedAt
 * @property int|null $clientSecretExpiresAt
 * @property string|null $authorizationEndpoint
 * @property string|null $tokenEndpoint
 */
class RegisterClientResponse extends Response
{
}
