<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizer;

use Sunaoka\Aws\Structures\Response;

/**
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
class GetAuthorizerResponse extends Response
{
}
