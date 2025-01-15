<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property bool|null $Ipv6AllowedForDualStack
 */
class VpcConfigOutput extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
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
