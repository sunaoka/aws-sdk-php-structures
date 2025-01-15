<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\UpdateConnectivityInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $hostAddress
 * @property int<0, 65535>|null $portNumber
 * @property string|null $metadata
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     hostAddress?: string|null,
     *     portNumber?: int<0, 65535>|null,
     *     metadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
