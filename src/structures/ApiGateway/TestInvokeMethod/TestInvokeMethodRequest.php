<?php

namespace Sunaoka\Aws\Structures\ApiGateway\TestInvokeMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string|null $pathWithQueryString
 * @property string|null $body
 * @property array<string, string>|null $headers
 * @property array<string, list<string>>|null $multiValueHeaders
 * @property string|null $clientCertificateId
 * @property array<string, string>|null $stageVariables
 */
class TestInvokeMethodRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     pathWithQueryString?: string|null,
     *     body?: string|null,
     *     headers?: array<string, string>|null,
     *     multiValueHeaders?: array<string, list<string>>|null,
     *     clientCertificateId?: string|null,
     *     stageVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
