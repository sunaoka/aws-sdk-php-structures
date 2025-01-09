<?php

namespace Sunaoka\Aws\Structures\ApiGateway\TestInvokeAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $authorizerId
 * @property array<string, string> $headers
 * @property array<string, list<string>> $multiValueHeaders
 * @property string $pathWithQueryString
 * @property string $body
 * @property array<string, string> $stageVariables
 * @property array<string, string> $additionalContext
 */
class TestInvokeAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     authorizerId: string,
     *     headers?: array<string, string>,
     *     multiValueHeaders?: array<string, list<string>>,
     *     pathWithQueryString?: string,
     *     body?: string,
     *     stageVariables?: array<string, string>,
     *     additionalContext?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
