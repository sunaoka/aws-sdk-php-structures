<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 */
class EksHostPath extends Shape
{
    /**
     * @param array{path?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
