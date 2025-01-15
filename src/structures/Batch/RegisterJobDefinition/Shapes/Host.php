<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourcePath
 */
class Host extends Shape
{
    /**
     * @param array{sourcePath?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
