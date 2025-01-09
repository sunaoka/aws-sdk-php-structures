<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $statusCode
 * @property string $selectionPattern
 * @property array<string, string> $responseParameters
 * @property array<string, string> $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT' $contentHandling
 */
class IntegrationResponse extends Shape
{
    /**
     * @param array{
     *     statusCode?: string,
     *     selectionPattern?: string,
     *     responseParameters?: array<string, string>,
     *     responseTemplates?: array<string, string>,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
