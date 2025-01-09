<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property string $VpcId
 * @property list<NetworkInterface> $NetworkInterfaces
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     VpcId?: string,
     *     NetworkInterfaces?: list<NetworkInterface>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
