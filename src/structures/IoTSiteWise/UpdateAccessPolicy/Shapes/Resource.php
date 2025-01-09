<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PortalResource $portal
 * @property ProjectResource $project
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     portal?: PortalResource,
     *     project?: ProjectResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
