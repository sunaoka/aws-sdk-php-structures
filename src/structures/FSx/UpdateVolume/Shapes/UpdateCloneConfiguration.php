<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START'|null $SplitAction
 */
class UpdateCloneConfiguration extends Shape
{
    /**
     * @param array{SplitAction?: 'START'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
