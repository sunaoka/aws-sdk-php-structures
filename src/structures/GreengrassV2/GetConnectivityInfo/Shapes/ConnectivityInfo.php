<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetConnectivityInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $hostAddress
 * @property int<0, 65535> $portNumber
 * @property string $metadata
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     hostAddress?: string,
     *     portNumber?: int<0, 65535>,
     *     metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
