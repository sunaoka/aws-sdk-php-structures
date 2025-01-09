<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AuthorizerCredentialsArn
 * @property string $AuthorizerId
 * @property int<0, 3600> $AuthorizerResultTtlInSeconds
 * @property 'REQUEST'|'JWT' $AuthorizerType
 * @property string $AuthorizerUri
 * @property list<string> $IdentitySource
 * @property string $IdentityValidationExpression
 * @property Shapes\JWTConfiguration $JwtConfiguration
 * @property string $Name
 * @property string $AuthorizerPayloadFormatVersion
 * @property bool $EnableSimpleResponses
 */
class UpdateAuthorizerResponse extends Response
{
}
