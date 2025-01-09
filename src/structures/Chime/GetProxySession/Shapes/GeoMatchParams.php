<?php

namespace Sunaoka\Aws\Structures\Chime\GetProxySession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property string $AreaCode
 */
class GeoMatchParams extends Shape
{
    /**
     * @param array{
     *     Country: string,
     *     AreaCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
