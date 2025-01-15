<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $medium
 * @property string|null $sizeLimit
 */
class EksEmptyDir extends Shape
{
    /**
     * @param array{
     *     medium?: string|null,
     *     sizeLimit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
