<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $statusCode
 * @property array<string, bool> $responseParameters
 * @property array<string, string> $responseModels
 */
class MethodResponse extends Shape
{
    /**
     * @param array{
     *     statusCode?: string,
     *     responseParameters?: array<string, bool>,
     *     responseModels?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
