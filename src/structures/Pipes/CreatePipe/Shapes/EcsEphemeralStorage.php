<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInGiB
 */
class EcsEphemeralStorage extends Shape
{
    /**
     * @param array{sizeInGiB: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
