<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property list<string>|null $AllocationIds
 * @property list<string>|null $PrivateIps
 */
class NatGatewayCreateMapping extends Shape
{
    /**
     * @param array{
     *     SubnetId: string,
     *     AllocationIds?: list<string>|null,
     *     PrivateIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
