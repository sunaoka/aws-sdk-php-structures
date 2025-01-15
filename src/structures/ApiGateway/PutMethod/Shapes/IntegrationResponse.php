<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $statusCode
 * @property string|null $selectionPattern
 * @property array<string, string>|null $responseParameters
 * @property array<string, string>|null $responseTemplates
 * @property 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null $contentHandling
 */
class IntegrationResponse extends Shape
{
    /**
     * @param array{
     *     statusCode?: string|null,
     *     selectionPattern?: string|null,
     *     responseParameters?: array<string, string>|null,
     *     responseTemplates?: array<string, string>|null,
     *     contentHandling?: 'CONVERT_TO_BINARY'|'CONVERT_TO_TEXT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
