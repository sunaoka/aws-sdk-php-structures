<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property array<string, IntegrationResponse> $integrationResponses
 * @property TlsConfig $tlsConfig
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     type?: 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY',
     *     httpMethod?: string,
     *     uri?: string,
     *     connectionType?: 'INTERNET'|'VPC_LINK',
     *     connectionId?: string,
     *     credentials?: string,
     *     requestParameters?: array<string, string>,
     *     requestTemplates?: array<string, string>,
     *     passthroughBehavior?: string,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT',
     *     timeoutInMillis?: int,
     *     cacheNamespace?: string,
     *     cacheKeyParameters?: list<string>,
     *     integrationResponses?: array<string, IntegrationResponse>,
     *     tlsConfig?: TlsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
