<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $AuthorizerCredentialsArn
 * @property string $AuthorizerId
 * @property int $AuthorizerResultTtlInSeconds
 * @property 'REQUEST'|'JWT' $AuthorizerType
 * @property string $AuthorizerUri
 * @property list<string> $IdentitySource
 * @property string $IdentityValidationExpression
 * @property Shapes\JWTConfiguration $JwtConfiguration
 * @property string $Name
 * @property string $AuthorizerPayloadFormatVersion
 * @property bool $EnableSimpleResponses
 */
class UpdateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     AuthorizerCredentialsArn?: string,
     *     AuthorizerId: string,
     *     AuthorizerResultTtlInSeconds?: int,
     *     AuthorizerType?: 'REQUEST'|'JWT',
     *     AuthorizerUri?: string,
     *     IdentitySource?: list<string>,
     *     IdentityValidationExpression?: string,
     *     JwtConfiguration?: Shapes\JWTConfiguration,
     *     Name?: string,
     *     AuthorizerPayloadFormatVersion?: string,
     *     EnableSimpleResponses?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
