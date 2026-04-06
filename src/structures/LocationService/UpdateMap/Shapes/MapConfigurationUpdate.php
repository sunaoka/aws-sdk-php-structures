<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoliticalView
 */
class MapConfigurationUpdate extends Shape
{
    /**
     * @param array{PoliticalView?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
