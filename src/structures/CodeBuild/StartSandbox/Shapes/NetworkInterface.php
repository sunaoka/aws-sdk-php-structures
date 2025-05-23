<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandbox\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subnetId
 * @property string|null $networkInterfaceId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     subnetId?: string|null,
     *     networkInterfaceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
