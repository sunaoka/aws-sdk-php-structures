<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceCodeArtifactsObjectKey
 * @property string $BuildArtifactsObjectKey
 */
class CodeArtifacts extends Shape
{
    /**
     * @param array{
     *     SourceCodeArtifactsObjectKey: string,
     *     BuildArtifactsObjectKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
