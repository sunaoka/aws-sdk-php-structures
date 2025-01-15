<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeOrderableClusterOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<SupportedPlatform>|null $SupportedPlatforms
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     SupportedPlatforms?: list<SupportedPlatform>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
