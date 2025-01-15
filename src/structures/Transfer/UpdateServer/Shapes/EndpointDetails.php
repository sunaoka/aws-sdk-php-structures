<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AddressAllocationIds
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcEndpointId
 * @property string|null $VpcId
 * @property list<string>|null $SecurityGroupIds
 */
class EndpointDetails extends Shape
{
    /**
     * @param array{
     *     AddressAllocationIds?: list<string>|null,
     *     SubnetIds?: list<string>|null,
     *     VpcEndpointId?: string|null,
     *     VpcId?: string|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
