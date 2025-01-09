<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthorizerCredentialsArn
 * @property string $AuthorizerId
 * @property int $AuthorizerResultTtlInSeconds
 * @property 'REQUEST'|'JWT' $AuthorizerType
 * @property string $AuthorizerUri
 * @property list<string> $IdentitySource
 * @property string $IdentityValidationExpression
 * @property JWTConfiguration $JwtConfiguration
 * @property string $Name
 * @property string $AuthorizerPayloadFormatVersion
 * @property bool $EnableSimpleResponses
 */
class Authorizer extends Shape
{
    /**
     * @param array{
     *     AuthorizerCredentialsArn?: string,
     *     AuthorizerId?: string,
     *     AuthorizerResultTtlInSeconds?: int,
     *     AuthorizerType?: 'REQUEST'|'JWT',
     *     AuthorizerUri?: string,
     *     IdentitySource?: list<string>,
     *     IdentityValidationExpression?: string,
     *     JwtConfiguration?: JWTConfiguration,
     *     Name: string,
     *     AuthorizerPayloadFormatVersion?: string,
     *     EnableSimpleResponses?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
