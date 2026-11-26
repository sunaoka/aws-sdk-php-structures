<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SubnetDetails>|null $subnets
 * @property list<SecurityGroupDetails>|null $securityGroups
 */
class UpdateProxyVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets?: list<SubnetDetails>|null,
     *     securityGroups?: list<SecurityGroupDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
