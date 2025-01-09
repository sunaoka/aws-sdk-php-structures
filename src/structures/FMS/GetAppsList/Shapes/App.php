<?php

namespace Sunaoka\Aws\Structures\FMS\GetAppsList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppName
 * @property string $Protocol
 * @property int<0, 65535> $Port
 */
class App extends Shape
{
    /**
     * @param array{
     *     AppName: string,
     *     Protocol: string,
     *     Port: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
