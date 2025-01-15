<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $statusCode
 * @property array<string, bool>|null $responseParameters
 * @property array<string, string>|null $responseModels
 */
class MethodResponse extends Shape
{
    /**
     * @param array{
     *     statusCode?: string|null,
     *     responseParameters?: array<string, bool>|null,
     *     responseModels?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
