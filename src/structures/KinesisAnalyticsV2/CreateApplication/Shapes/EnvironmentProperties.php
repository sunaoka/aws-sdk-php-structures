<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PropertyGroup> $PropertyGroups
 */
class EnvironmentProperties extends Shape
{
    /**
     * @param array{PropertyGroups: list<PropertyGroup>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
