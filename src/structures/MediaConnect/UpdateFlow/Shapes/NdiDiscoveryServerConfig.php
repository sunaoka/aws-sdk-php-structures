<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DiscoveryServerAddress
 * @property int|null $DiscoveryServerPort
 * @property string $VpcInterfaceAdapter
 */
class NdiDiscoveryServerConfig extends Shape
{
    /**
     * @param array{
     *     DiscoveryServerAddress: string,
     *     DiscoveryServerPort?: int|null,
     *     VpcInterfaceAdapter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
