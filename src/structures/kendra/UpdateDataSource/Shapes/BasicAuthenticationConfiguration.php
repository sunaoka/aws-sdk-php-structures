<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 * @property string $Credentials
 */
class BasicAuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int,
     *     Credentials: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
