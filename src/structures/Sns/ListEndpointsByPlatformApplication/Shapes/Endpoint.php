<?php

namespace Sunaoka\Aws\Structures\Sns\ListEndpointsByPlatformApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointArn
 * @property array<string, string>|null $Attributes
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointArn?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
