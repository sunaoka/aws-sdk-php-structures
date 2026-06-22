<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateInstrumentationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeLocation|null $CodeLocation
 */
class Location extends Shape
{
    /**
     * @param array{CodeLocation?: CodeLocation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
