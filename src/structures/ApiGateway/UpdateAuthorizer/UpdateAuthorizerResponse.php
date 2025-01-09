<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS' $type
 * @property list<string> $providerARNs
 * @property string $authType
 * @property string $authorizerUri
 * @property string $authorizerCredentials
 * @property string $identitySource
 * @property string $identityValidationExpression
 * @property int $authorizerResultTtlInSeconds
 */
class UpdateAuthorizerResponse extends Response
{
}
