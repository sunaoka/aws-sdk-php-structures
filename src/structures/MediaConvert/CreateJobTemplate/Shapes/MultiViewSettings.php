<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiViewInput|null $Input
 */
class MultiViewSettings extends Shape
{
    /**
     * @param array{Input?: MultiViewInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
