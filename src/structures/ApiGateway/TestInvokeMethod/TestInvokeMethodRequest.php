<?php

namespace Sunaoka\Aws\Structures\ApiGateway\TestInvokeMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $pathWithQueryString
 * @property string $body
 * @property array<string, string> $headers
 * @property array<string, list<string>> $multiValueHeaders
 * @property string $clientCertificateId
 * @property array<string, string> $stageVariables
 */
class TestInvokeMethodRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     pathWithQueryString?: string,
     *     body?: string,
     *     headers?: array<string, string>,
     *     multiValueHeaders?: array<string, list<string>>,
     *     clientCertificateId?: string,
     *     stageVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
