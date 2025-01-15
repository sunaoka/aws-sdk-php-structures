<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY' $type
 * @property string|null $integrationHttpMethod
 * @property string|null $uri
 * @property 'INTERNET'|'VPC_LINK'|null $connectionType
 * @property string|null $connectionId
 * @property string|null $credentials
 * @property array<string, string>|null $requestParameters
 * @property array<string, string>|null $requestTemplates
 * @property string|null $passthroughBehavior
 * @property string|null $cacheNamespace
 * @property list<string>|null $cacheKeyParameters
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $contentHandling
 * @property int|null $timeoutInMillis
 * @property Shapes\TlsConfig|null $tlsConfig
 */
class PutIntegrationRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     type: 'HTTP'|'AWS'|'MOCK'|'HTTP_PROXY'|'AWS_PROXY',
     *     integrationHttpMethod?: string|null,
     *     uri?: string|null,
     *     connectionType?: 'INTERNET'|'VPC_LINK'|null,
     *     connectionId?: string|null,
     *     credentials?: string|null,
     *     requestParameters?: array<string, string>|null,
     *     requestTemplates?: array<string, string>|null,
     *     passthroughBehavior?: string|null,
     *     cacheNamespace?: string|null,
     *     cacheKeyParameters?: list<string>|null,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null,
     *     timeoutInMillis?: int|null,
     *     tlsConfig?: Shapes\TlsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
