<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetConnectivityInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $hostAddress
 * @property int $portNumber
 * @property string $metadata
 */
class ConnectivityInfo extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     hostAddress?: string,
     *     portNumber?: int,
     *     metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
