<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property list<string>|null $SecurityGroupIdList
 * @property string|null $AvailabilityZone
 */
class PhysicalConnectionRequirements extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     SecurityGroupIdList?: list<string>|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
