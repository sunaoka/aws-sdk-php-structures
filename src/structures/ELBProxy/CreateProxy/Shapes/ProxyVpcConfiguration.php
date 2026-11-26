<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcId
 * @property list<SubnetAndZone> $availabilityZones
 * @property list<SecurityGroupDetails> $securityGroups
 */
class ProxyVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcId?: string|null,
     *     availabilityZones: list<SubnetAndZone>,
     *     securityGroups: list<SecurityGroupDetails>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
