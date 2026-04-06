<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddIpRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrIp
 * @property string|null $Description
 */
class IpRoute extends Shape
{
    /**
     * @param array{
     *     CidrIp?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
