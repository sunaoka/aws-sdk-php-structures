<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $name
 * @property 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS' $type
 * @property list<string>|null $providerARNs
 * @property string|null $authType
 * @property string|null $authorizerUri
 * @property string|null $authorizerCredentials
 * @property string|null $identitySource
 * @property string|null $identityValidationExpression
 * @property int|null $authorizerResultTtlInSeconds
 */
class CreateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name: string,
     *     type: 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS',
     *     providerARNs?: list<string>|null,
     *     authType?: string|null,
     *     authorizerUri?: string|null,
     *     authorizerCredentials?: string|null,
     *     identitySource?: string|null,
     *     identityValidationExpression?: string|null,
     *     authorizerResultTtlInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
