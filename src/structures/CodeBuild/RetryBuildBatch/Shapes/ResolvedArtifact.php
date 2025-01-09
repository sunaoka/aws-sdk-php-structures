<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS' $type
 * @property string $location
 * @property string $identifier
 */
class ResolvedArtifact extends Shape
{
    /**
     * @param array{
     *     type?: 'CODEPIPELINE'|'S3'|'NO_ARTIFACTS',
     *     location?: string,
     *     identifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
