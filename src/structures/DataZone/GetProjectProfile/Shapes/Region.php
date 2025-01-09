<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $regionName
 * @property string $regionNamePath
 */
class Region extends Shape
{
    /**
     * @param array{
     *     regionName?: string,
     *     regionNamePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
