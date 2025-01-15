<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CandidateDefinitionNotebookLocation
 * @property string|null $DataExplorationNotebookLocation
 */
class AutoMLJobArtifacts extends Shape
{
    /**
     * @param array{
     *     CandidateDefinitionNotebookLocation?: string|null,
     *     DataExplorationNotebookLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
