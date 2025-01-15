<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $unlimited
 * @property int<1, 1000>|null $maxVersions
 */
class VersioningConfiguration extends Shape
{
    /**
     * @param array{
     *     unlimited?: bool|null,
     *     maxVersions?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
