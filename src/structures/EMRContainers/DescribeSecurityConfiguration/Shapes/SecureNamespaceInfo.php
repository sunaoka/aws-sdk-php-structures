<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterId
 * @property string|null $namespace
 */
class SecureNamespaceInfo extends Shape
{
    /**
     * @param array{
     *     clusterId?: string|null,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
