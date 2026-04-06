<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property int<1, 65535>|null $Port
 * @property string|null $RdsEndpoint
 */
class ModifyVerifiedAccessEndpointRdsOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     Port?: int<1, 65535>|null,
     *     RdsEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
