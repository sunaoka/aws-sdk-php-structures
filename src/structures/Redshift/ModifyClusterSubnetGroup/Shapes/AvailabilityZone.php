<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<SupportedPlatform> $SupportedPlatforms
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     SupportedPlatforms?: list<SupportedPlatform>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
