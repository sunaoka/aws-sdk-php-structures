<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 */
class VpcRouterNetworkInterfaceConfiguration extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds: list<string>,
     *     SubnetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
