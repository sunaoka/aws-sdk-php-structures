<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListTrails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrailARN
 * @property string|null $Name
 * @property string|null $HomeRegion
 */
class TrailInfo extends Shape
{
    /**
     * @param array{
     *     TrailARN?: string|null,
     *     Name?: string|null,
     *     HomeRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
