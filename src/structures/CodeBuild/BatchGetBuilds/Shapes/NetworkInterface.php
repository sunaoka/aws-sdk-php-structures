<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuilds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $subnetId
 * @property string $networkInterfaceId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     subnetId?: string,
     *     networkInterfaceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
