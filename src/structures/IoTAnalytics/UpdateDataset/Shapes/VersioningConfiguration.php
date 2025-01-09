<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $unlimited
 * @property int<1, 1000> $maxVersions
 */
class VersioningConfiguration extends Shape
{
    /**
     * @param array{
     *     unlimited?: bool,
     *     maxVersions?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
