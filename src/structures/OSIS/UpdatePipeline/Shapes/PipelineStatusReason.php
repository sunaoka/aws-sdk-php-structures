<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 */
class PipelineStatusReason extends Shape
{
    /**
     * @param array{Description?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
