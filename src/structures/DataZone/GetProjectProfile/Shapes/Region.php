<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProjectProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $regionName
 * @property string|null $regionNamePath
 */
class Region extends Shape
{
    /**
     * @param array{
     *     regionName?: string|null,
     *     regionNamePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
