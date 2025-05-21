<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisTemplateArtifact $entryPoint
 * @property list<AnalysisTemplateArtifact>|null $additionalArtifacts
 * @property string $roleArn
 */
class AnalysisTemplateArtifacts extends Shape
{
    /**
     * @param array{
     *     entryPoint: AnalysisTemplateArtifact,
     *     additionalArtifacts?: list<AnalysisTemplateArtifact>|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
