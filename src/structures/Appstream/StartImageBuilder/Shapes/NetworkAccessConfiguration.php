<?php

namespace Sunaoka\Aws\Structures\Appstream\StartImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EniPrivateIpAddress
 * @property string $EniId
 */
class NetworkAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     EniPrivateIpAddress?: string,
     *     EniId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
