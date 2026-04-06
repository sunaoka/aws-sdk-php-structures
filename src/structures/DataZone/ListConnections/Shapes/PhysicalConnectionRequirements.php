<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subnetId
 * @property list<string>|null $subnetIdList
 * @property list<string>|null $securityGroupIdList
 * @property string|null $availabilityZone
 */
class PhysicalConnectionRequirements extends Shape
{
    /**
     * @param array{
     *     subnetId?: string|null,
     *     subnetIdList?: list<string>|null,
     *     securityGroupIdList?: list<string>|null,
     *     availabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
