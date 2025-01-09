<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AddressAllocationIds
 * @property list<string> $SubnetIds
 * @property string $VpcEndpointId
 * @property string $VpcId
 * @property list<string> $SecurityGroupIds
 */
class EndpointDetails extends Shape
{
    /**
     * @param array{
     *     AddressAllocationIds?: list<string>,
     *     SubnetIds?: list<string>,
     *     VpcEndpointId?: string,
     *     VpcId?: string,
     *     SecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
