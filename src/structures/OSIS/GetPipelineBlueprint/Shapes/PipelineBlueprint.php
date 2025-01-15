<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlueprintName
 * @property string|null $PipelineConfigurationBody
 * @property string|null $DisplayName
 * @property string|null $DisplayDescription
 * @property string|null $Service
 * @property string|null $UseCase
 */
class PipelineBlueprint extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string|null,
     *     PipelineConfigurationBody?: string|null,
     *     DisplayName?: string|null,
     *     DisplayDescription?: string|null,
     *     Service?: string|null,
     *     UseCase?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
