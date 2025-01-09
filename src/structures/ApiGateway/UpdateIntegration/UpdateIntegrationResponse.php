<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY' $type
 * @property string $httpMethod
 * @property string $uri
 * @property 'INTERNET'|'VPC_LINK' $connectionType
 * @property string $connectionId
 * @property string $credentials
 * @property array<string, string> $requestParameters
 * @property array<string, string> $requestTemplates
 * @property string $passthroughBehavior
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $contentHandling
 * @property int $timeoutInMillis
 * @property string $cacheNamespace
 * @property list<string> $cacheKeyParameters
 * @property array<string, Shapes\IntegrationResponse> $integrationResponses
 * @property Shapes\TlsConfig $tlsConfig
 */
class UpdateIntegrationResponse extends Response
{
}
