<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property list<string> $SecurityGroupIdList
 * @property string $AvailabilityZone
 */
class PhysicalConnectionRequirements extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     SecurityGroupIdList?: list<string>,
     *     AvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
