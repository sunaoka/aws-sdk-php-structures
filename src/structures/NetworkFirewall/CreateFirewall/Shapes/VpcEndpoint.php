<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<SubnetMapping> $SubnetMappings
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SubnetMappings: list<SubnetMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
