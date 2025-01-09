<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<21, 200> $sizeInGiB
 */
class EcsEphemeralStorage extends Shape
{
    /**
     * @param array{sizeInGiB: int<21, 200>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
