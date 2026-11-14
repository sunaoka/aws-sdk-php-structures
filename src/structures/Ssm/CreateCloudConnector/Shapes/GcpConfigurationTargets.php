<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GcpProject>|null $Projects
 */
class GcpConfigurationTargets extends Shape
{
    /**
     * @param array{Projects?: list<GcpProject>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
