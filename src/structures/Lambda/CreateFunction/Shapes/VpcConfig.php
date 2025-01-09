<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property bool $Ipv6AllowedForDualStack
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     Ipv6AllowedForDualStack?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
