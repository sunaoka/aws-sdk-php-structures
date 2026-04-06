<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $forced
 */
class Overrides extends Shape
{
    /**
     * @param array{forced?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
