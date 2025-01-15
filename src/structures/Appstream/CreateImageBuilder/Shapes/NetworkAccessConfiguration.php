<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EniPrivateIpAddress
 * @property string|null $EniId
 */
class NetworkAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     EniPrivateIpAddress?: string|null,
     *     EniId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
