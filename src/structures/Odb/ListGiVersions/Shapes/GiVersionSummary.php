<?php

namespace Sunaoka\Aws\Structures\Odb\ListGiVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 */
class GiVersionSummary extends Shape
{
    /**
     * @param array{version?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
