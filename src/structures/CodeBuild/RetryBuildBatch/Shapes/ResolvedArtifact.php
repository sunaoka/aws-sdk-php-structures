<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS'|null $type
 * @property string|null $location
 * @property string|null $identifier
 */
class ResolvedArtifact extends Shape
{
    /**
     * @param array{
     *     type?: 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS'|null,
     *     location?: string|null,
     *     identifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
