<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY' $type
 * @property string $integrationHttpMethod
 * @property string $uri
 * @property 'INTERNET'|'VPC_LINK' $connectionType
 * @property string $connectionId
 * @property string $credentials
 * @property array<string, string> $requestParameters
 * @property array<string, string> $requestTemplates
 * @property string $passthroughBehavior
 * @property string $cacheNamespace
 * @property list<string> $cacheKeyParameters
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $contentHandling
 * @property int $timeoutInMillis
 * @property Shapes\TlsConfig $tlsConfig
 */
class PutIntegrationRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     type: 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY',
     *     integrationHttpMethod?: string,
     *     uri?: string,
     *     connectionType?: 'INTERNET'|'VPC_LINK',
     *     connectionId?: string,
     *     credentials?: string,
     *     requestParameters?: array<string, string>,
     *     requestTemplates?: array<string, string>,
     *     passthroughBehavior?: string,
     *     cacheNamespace?: string,
     *     cacheKeyParameters?: list<string>,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT',
     *     timeoutInMillis?: int,
     *     tlsConfig?: Shapes\TlsConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
