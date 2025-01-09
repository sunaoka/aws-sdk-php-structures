<?php

namespace Sunaoka\Aws\Structures\Sns\ListEndpointsByPlatformApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointArn
 * @property array<string, string> $Attributes
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
