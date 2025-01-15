<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 */
class PipelineStatusReason extends Shape
{
    /**
     * @param array{Description?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
