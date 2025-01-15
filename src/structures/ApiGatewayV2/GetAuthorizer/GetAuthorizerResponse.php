<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AuthorizerCredentialsArn
 * @property string|null $AuthorizerId
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
class GetAuthorizerResponse extends Response
{
}
