<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $AuthorizerCredentialsArn
 * @property string $AuthorizerId
 * @property int<0, 3600>|null $AuthorizerResultTtlInSeconds
 * @property 'REQUEST'|'JWT'|null $AuthorizerType
 * @property string|null $AuthorizerUri
 * @property list<string>|null $IdentitySource
 * @property string|null $IdentityValidationExpression
 * @property Shapes\JWTConfiguration|null $JwtConfiguration
 * @property string|null $Name
 * @property string|null $AuthorizerPayloadFormatVersion
 * @property bool|null $EnableSimpleResponses
 */
class UpdateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     AuthorizerCredentialsArn?: string|null,
     *     AuthorizerId: string,
     *     AuthorizerResultTtlInSeconds?: int<0, 3600>|null,
     *     AuthorizerType?: 'REQUEST'|'JWT'|null,
     *     AuthorizerUri?: string|null,
     *     IdentitySource?: list<string>|null,
     *     IdentityValidationExpression?: string|null,
     *     JwtConfiguration?: Shapes\JWTConfiguration|null,
     *     Name?: string|null,
     *     AuthorizerPayloadFormatVersion?: string|null,
     *     EnableSimpleResponses?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
