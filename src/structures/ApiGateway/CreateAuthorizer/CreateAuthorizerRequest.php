<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $name
 * @property 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS'|'JWT' $type
 * @property list<string>|null $providerARNs
 * @property string|null $authType
 * @property string|null $authorizerUri
 * @property string|null $authorizerCredentials
 * @property string|null $identitySource
 * @property string|null $identityValidationExpression
 * @property int|null $authorizerResultTtlInSeconds
 * @property Shapes\JwtConfigurationInput|null $jwtConfiguration
 */
class CreateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name: string,
     *     type: 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS'|'JWT',
     *     providerARNs?: list<string>|null,
     *     authType?: string|null,
     *     authorizerUri?: string|null,
     *     authorizerCredentials?: string|null,
     *     identitySource?: string|null,
     *     identityValidationExpression?: string|null,
     *     authorizerResultTtlInSeconds?: int|null,
     *     jwtConfiguration?: Shapes\JwtConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
