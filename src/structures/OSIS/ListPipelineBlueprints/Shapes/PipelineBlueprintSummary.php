<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelineBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlueprintName
 * @property string $DisplayName
 * @property string $DisplayDescription
 * @property string $Service
 * @property string $UseCase
 */
class PipelineBlueprintSummary extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string,
     *     DisplayName?: string,
     *     DisplayDescription?: string,
     *     Service?: string,
     *     UseCase?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
