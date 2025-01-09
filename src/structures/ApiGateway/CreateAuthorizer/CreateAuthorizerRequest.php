<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
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
class CreateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name: string,
     *     type: 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS',
     *     providerARNs?: list<string>,
     *     authType?: string,
     *     authorizerUri?: string,
     *     authorizerCredentials?: string,
     *     identitySource?: string,
     *     identityValidationExpression?: string,
     *     authorizerResultTtlInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
