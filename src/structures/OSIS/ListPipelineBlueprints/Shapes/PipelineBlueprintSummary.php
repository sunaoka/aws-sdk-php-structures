<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlueprintName
 */
class PipelineBlueprintSummary extends Shape
{
    /**
     * @param array{BlueprintName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
