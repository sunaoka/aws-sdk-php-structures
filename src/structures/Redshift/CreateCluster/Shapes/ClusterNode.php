<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeRole
 * @property string $PrivateIPAddress
 * @property string $PublicIPAddress
 */
class ClusterNode extends Shape
{
    /**
     * @param array{
     *     NodeRole?: string,
     *     PrivateIPAddress?: string,
     *     PublicIPAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
