<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NodeRole
 * @property string|null $PrivateIPAddress
 * @property string|null $PublicIPAddress
 */
class ClusterNode extends Shape
{
    /**
     * @param array{
     *     NodeRole?: string|null,
     *     PrivateIPAddress?: string|null,
     *     PublicIPAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
