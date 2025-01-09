<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SiteMaps
 */
class SiteMapsConfiguration extends Shape
{
    /**
     * @param array{SiteMaps: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
