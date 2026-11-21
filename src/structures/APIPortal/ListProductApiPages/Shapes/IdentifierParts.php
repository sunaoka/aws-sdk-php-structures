<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductApiPages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property string $method
 * @property string $resourceArn
 */
class IdentifierParts extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     method: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
