<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListImageSetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $forced
 */
class Overrides extends Shape
{
    /**
     * @param array{forced?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
