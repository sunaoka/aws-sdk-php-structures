<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property bool|null $Ipv6AllowedForDualStack
 */
class VpcConfigInput extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Ipv6AllowedForDualStack?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
