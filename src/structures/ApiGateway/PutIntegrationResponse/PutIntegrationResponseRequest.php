<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegrationResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property string $httpMethod
 * @property string $statusCode
 * @property string $selectionPattern
 * @property array<string, string> $responseParameters
 * @property array<string, string> $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $contentHandling
 */
class PutIntegrationResponseRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     httpMethod: string,
     *     statusCode: string,
     *     selectionPattern?: string,
     *     responseParameters?: array<string, string>,
     *     responseTemplates?: array<string, string>,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
