<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $AuthorizerCredentialsArn
 * @property int<0, 3600>|null $AuthorizerResultTtlInSeconds
 * @property 'REQUEST'|'JWT' $AuthorizerType
 * @property string|null $AuthorizerUri
 * @property list<string> $IdentitySource
 * @property string|null $IdentityValidationExpression
 * @property Shapes\JWTConfiguration|null $JwtConfiguration
 * @property string $Name
 * @property string|null $AuthorizerPayloadFormatVersion
 * @property bool|null $EnableSimpleResponses
 */
class CreateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     AuthorizerCredentialsArn?: string|null,
     *     AuthorizerResultTtlInSeconds?: int<0, 3600>|null,
     *     AuthorizerType: 'REQUEST'|'JWT',
     *     AuthorizerUri?: string|null,
     *     IdentitySource: list<string>,
     *     IdentityValidationExpression?: string|null,
     *     JwtConfiguration?: Shapes\JWTConfiguration|null,
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
