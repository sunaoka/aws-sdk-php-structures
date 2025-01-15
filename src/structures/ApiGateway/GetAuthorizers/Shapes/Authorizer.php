<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetAuthorizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class Authorizer extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     type?: 'TOKEN'|'REQUEST'|'COGNITO_USER_POOLS'|null,
     *     providerARNs?: list<string>|null,
     *     authType?: string|null,
     *     authorizerUri?: string|null,
     *     authorizerCredentials?: string|null,
     *     identitySource?: string|null,
     *     identityValidationExpression?: string|null,
     *     authorizerResultTtlInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
