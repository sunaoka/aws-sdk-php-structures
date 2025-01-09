<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stageName
 */
class SucceededInStageFilter extends Shape
{
    /**
     * @param array{stageName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
