<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityZone
 * @property list<string>|null $securityGroupIdList
 * @property string|null $subnetId
 * @property list<string>|null $subnetIdList
 */
class PhysicalConnectionRequirements extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string|null,
     *     securityGroupIdList?: list<string>|null,
     *     subnetId?: string|null,
     *     subnetIdList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
