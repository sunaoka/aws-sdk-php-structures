<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $VpcId
 * @property bool|null $Ipv6AllowedForDualStack
 */
class VpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     VpcId?: string|null,
     *     Ipv6AllowedForDualStack?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
