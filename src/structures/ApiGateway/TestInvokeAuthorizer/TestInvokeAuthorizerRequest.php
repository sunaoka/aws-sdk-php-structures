<?php

namespace Sunaoka\Aws\Structures\ApiGateway\TestInvokeAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $authorizerId
 * @property array<string, string>|null $headers
 * @property array<string, list<string>>|null $multiValueHeaders
 * @property string|null $pathWithQueryString
 * @property string|null $body
 * @property array<string, string>|null $stageVariables
 * @property array<string, string>|null $additionalContext
 */
class TestInvokeAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     authorizerId: string,
     *     headers?: array<string, string>|null,
     *     multiValueHeaders?: array<string, list<string>>|null,
     *     pathWithQueryString?: string|null,
     *     body?: string|null,
     *     stageVariables?: array<string, string>|null,
     *     additionalContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
