<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CityName
 */
class City extends Shape
{
    /**
     * @param array{CityName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
