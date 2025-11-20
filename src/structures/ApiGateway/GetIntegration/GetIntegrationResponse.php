<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY'|null $type
 * @property string|null $httpMethod
 * @property string|null $uri
 * @property 'INTERNET'|'VPC_LINK'|null $connectionType
 * @property string|null $connectionId
 * @property string|null $credentials
 * @property array<string, string>|null $requestParameters
 * @property array<string, string>|null $requestTemplates
 * @property string|null $passthroughBehavior
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $contentHandling
 * @property int|null $timeoutInMillis
 * @property string|null $cacheNamespace
 * @property list<string>|null $cacheKeyParameters
 * @property array<string, Shapes\IntegrationResponse>|null $integrationResponses
 * @property Shapes\TlsConfig|null $tlsConfig
 * @property 'BUFFERED'|'STREAM'|null $responseTransferMode
 */
class GetIntegrationResponse extends Response
{
}
