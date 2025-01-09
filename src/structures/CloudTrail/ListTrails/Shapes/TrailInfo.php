<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTrails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrailARN
 * @property string $Name
 * @property string $HomeRegion
 */
class TrailInfo extends Shape
{
    /**
     * @param array{
     *     TrailARN?: string,
     *     Name?: string,
     *     HomeRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
