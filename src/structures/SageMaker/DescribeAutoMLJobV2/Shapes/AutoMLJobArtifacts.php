<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CandidateDefinitionNotebookLocation
 * @property string $DataExplorationNotebookLocation
 */
class AutoMLJobArtifacts extends Shape
{
    /**
     * @param array{
     *     CandidateDefinitionNotebookLocation?: string,
     *     DataExplorationNotebookLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
