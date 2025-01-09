<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateGatewayResponse;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'DEFAULT_4XX'|'DEFAULT_5XX'|'RESOURCE_NOT_FOUND'|'UNAUTHORIZED'|'INVALID_API_KEY'|'ACCESS_DENIED'|'AUTHORIZER_FAILURE'|'AUTHORIZER_CONFIGURATION_ERROR'|'INVALID_SIGNATURE'|'EXPIRED_TOKEN'|'MISSING_AUTHENTICATION_TOKEN'|'INTEGRATION_FAILURE'|'INTEGRATION_TIMEOUT'|'API_CONFIGURATION_ERROR'|'UNSUPPORTED_MEDIA_TYPE'|'BAD_REQUEST_PARAMETERS'|'BAD_REQUEST_BODY'|'REQUEST_TOO_LARGE'|'THROTTLED'|'QUOTA_EXCEEDED'|'WAF_FILTERED' $responseType
 * @property string $statusCode
 * @property array<string, string> $responseParameters
 * @property array<string, string> $responseTemplates
 * @property bool $defaultResponse
 */
class UpdateGatewayResponseResponse extends Response
{
}
