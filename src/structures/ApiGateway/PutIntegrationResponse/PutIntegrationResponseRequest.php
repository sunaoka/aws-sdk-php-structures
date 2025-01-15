<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegrationResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $statusCode
 * @property string|null $selectionPattern
 * @property array<string, string>|null $responseParameters
 * @property array<string, string>|null $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $contentHandling
 */
class PutIntegrationResponseRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     statusCode: string,
     *     selectionPattern?: string|null,
     *     responseParameters?: array<string, string>|null,
     *     responseTemplates?: array<string, string>|null,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
