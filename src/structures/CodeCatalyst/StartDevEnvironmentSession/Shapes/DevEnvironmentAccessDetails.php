<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironmentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamUrl
 * @property string $tokenValue
 */
class DevEnvironmentAccessDetails extends Shape
{
    /**
     * @param array{
     *     streamUrl: string,
     *     tokenValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
