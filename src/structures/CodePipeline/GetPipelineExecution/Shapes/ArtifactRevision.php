<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $revisionId
 * @property string|null $revisionChangeIdentifier
 * @property string|null $revisionSummary
 * @property \Aws\Api\DateTimeResult|null $created
 * @property string|null $revisionUrl
 */
class ArtifactRevision extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     revisionId?: string|null,
     *     revisionChangeIdentifier?: string|null,
     *     revisionSummary?: string|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     revisionUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
