<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlueprintName
 * @property string|null $PipelineConfigurationBody
 */
class PipelineBlueprint extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string|null,
     *     PipelineConfigurationBody?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
