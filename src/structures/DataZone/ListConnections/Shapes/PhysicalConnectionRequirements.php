<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $availabilityZone
 * @property list<string> $securityGroupIdList
 * @property string $subnetId
 * @property list<string> $subnetIdList
 */
class PhysicalConnectionRequirements extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string,
     *     securityGroupIdList?: list<string>,
     *     subnetId?: string,
     *     subnetIdList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
