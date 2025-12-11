<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcId
 * @property string|null $VpcEndpointId
 */
class DescribedWebAppVpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     VpcId?: string|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
