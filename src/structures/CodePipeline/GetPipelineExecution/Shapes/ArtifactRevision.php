<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $revisionId
 * @property string $revisionChangeIdentifier
 * @property string $revisionSummary
 * @property \Aws\Api\DateTimeResult $created
 * @property string $revisionUrl
 */
class ArtifactRevision extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     revisionId?: string,
     *     revisionChangeIdentifier?: string,
     *     revisionSummary?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     revisionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
