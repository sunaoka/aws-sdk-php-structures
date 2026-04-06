<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property AnalysisTemplateArtifacts|null $artifacts
 */
class AnalysisSource extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     artifacts?: AnalysisTemplateArtifacts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
