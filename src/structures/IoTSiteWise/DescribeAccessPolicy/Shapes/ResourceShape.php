<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PortalResource|null $portal
 * @property ProjectResource|null $project
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     portal?: PortalResource|null,
     *     project?: ProjectResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
