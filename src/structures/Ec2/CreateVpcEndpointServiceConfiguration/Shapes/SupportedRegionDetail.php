<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $ServiceState
 */
class SupportedRegionDetail extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     ServiceState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
