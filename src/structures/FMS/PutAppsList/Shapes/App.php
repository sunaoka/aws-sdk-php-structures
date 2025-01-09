<?php

namespace Sunaoka\Aws\Structures\FMS\PutAppsList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppName
 * @property string $Protocol
 * @property int $Port
 */
class App extends Shape
{
    /**
     * @param array{
     *     AppName: string,
     *     Protocol: string,
     *     Port: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
