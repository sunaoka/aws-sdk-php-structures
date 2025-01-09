<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property string $VpcId
 * @property bool $Ipv6AllowedForDualStack
 */
class VpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     VpcId?: string,
     *     Ipv6AllowedForDualStack?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
