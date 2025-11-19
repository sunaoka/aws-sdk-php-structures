<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property array<string, IntegrationResponse>|null $integrationResponses
 * @property TlsConfig|null $tlsConfig
 * @property 'BUFFERED'|'STREAM'|null $responseTransferMode
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     type?: 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY'|null,
     *     httpMethod?: string|null,
     *     uri?: string|null,
     *     connectionType?: 'INTERNET'|'VPC_LINK'|null,
     *     connectionId?: string|null,
     *     credentials?: string|null,
     *     requestParameters?: array<string, string>|null,
     *     requestTemplates?: array<string, string>|null,
     *     passthroughBehavior?: string|null,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     timeoutInMillis?: int|null,
     *     cacheNamespace?: string|null,
     *     cacheKeyParameters?: list<string>|null,
     *     integrationResponses?: array<string, IntegrationResponse>|null,
     *     tlsConfig?: TlsConfig|null,
     *     responseTransferMode?: 'BUFFERED'|'STREAM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
