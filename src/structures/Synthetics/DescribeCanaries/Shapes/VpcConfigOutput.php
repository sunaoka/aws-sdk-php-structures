<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property bool $Ipv6AllowedForDualStack
 */
class VpcConfigOutput extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
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
