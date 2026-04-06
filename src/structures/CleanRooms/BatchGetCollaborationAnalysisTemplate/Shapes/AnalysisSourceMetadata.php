<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisTemplateArtifactMetadata|null $artifacts
 */
class AnalysisSourceMetadata extends Shape
{
    /**
     * @param array{artifacts?: AnalysisTemplateArtifactMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
