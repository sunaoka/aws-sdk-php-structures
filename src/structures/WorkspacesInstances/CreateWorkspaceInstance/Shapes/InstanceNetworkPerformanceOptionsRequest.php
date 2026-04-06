<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'vpc-1'|'ebs-1'|null $BandwidthWeighting
 */
class InstanceNetworkPerformanceOptionsRequest extends Shape
{
    /**
     * @param array{BandwidthWeighting?: 'default'|'vpc-1'|'ebs-1'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
