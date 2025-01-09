<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property bool $Ipv6AllowedForDualStack
 */
class VpcConfigInput extends Shape
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
