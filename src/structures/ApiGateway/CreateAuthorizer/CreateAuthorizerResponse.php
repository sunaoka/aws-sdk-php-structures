<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS'|null $type
 * @property list<string>|null $providerARNs
 * @property string|null $authType
 * @property string|null $authorizerUri
 * @property string|null $authorizerCredentials
 * @property string|null $identitySource
 * @property string|null $identityValidationExpression
 * @property int|null $authorizerResultTtlInSeconds
 */
class CreateAuthorizerResponse extends Response
{
}
