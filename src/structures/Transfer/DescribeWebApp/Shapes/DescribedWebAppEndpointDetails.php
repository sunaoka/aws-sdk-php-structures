<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DescribedWebAppVpcConfig|null $Vpc
 */
class DescribedWebAppEndpointDetails extends Shape
{
    /**
     * @param array{Vpc?: DescribedWebAppVpcConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
