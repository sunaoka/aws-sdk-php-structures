<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PortalResource|null $portal
 * @property ProjectResource|null $project
 */
class Resource extends Shape
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
