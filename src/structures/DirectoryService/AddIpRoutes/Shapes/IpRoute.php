<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddIpRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrIp
 * @property string $Description
 */
class IpRoute extends Shape
{
    /**
     * @param array{
     *     CidrIp?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
