<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthorizerCredentialsArn
 * @property string|null $AuthorizerId
 * @property int<0, 3600>|null $AuthorizerResultTtlInSeconds
 * @property 'REQUEST'|'JWT'|null $AuthorizerType
 * @property string|null $AuthorizerUri
 * @property list<string>|null $IdentitySource
 * @property string|null $IdentityValidationExpression
 * @property JWTConfiguration|null $JwtConfiguration
 * @property string $Name
 * @property string|null $AuthorizerPayloadFormatVersion
 * @property bool|null $EnableSimpleResponses
 */
class Authorizer extends Shape
{
    /**
     * @param array{
     *     AuthorizerCredentialsArn?: string|null,
     *     AuthorizerId?: string|null,
     *     AuthorizerResultTtlInSeconds?: int<0, 3600>|null,
     *     AuthorizerType?: 'REQUEST'|'JWT'|null,
     *     AuthorizerUri?: string|null,
     *     IdentitySource?: list<string>|null,
     *     IdentityValidationExpression?: string|null,
     *     JwtConfiguration?: JWTConfiguration|null,
     *     Name: string,
     *     AuthorizerPayloadFormatVersion?: string|null,
     *     EnableSimpleResponses?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
