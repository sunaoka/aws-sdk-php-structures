<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property int<1, 65535> $Port
 * @property string $RdsEndpoint
 */
class ModifyVerifiedAccessEndpointRdsOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>,
     *     Port?: int<1, 65535>,
     *     RdsEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
