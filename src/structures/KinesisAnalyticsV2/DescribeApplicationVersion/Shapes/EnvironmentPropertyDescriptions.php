<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PropertyGroup>|null $PropertyGroupDescriptions
 */
class EnvironmentPropertyDescriptions extends Shape
{
    /**
     * @param array{PropertyGroupDescriptions?: list<PropertyGroup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
