<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 * @property string $Credentials
 */
class BasicAuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>,
     *     Credentials: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
