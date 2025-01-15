<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceCodeArtifactsObjectKey
 * @property string|null $BuildArtifactsObjectKey
 */
class CodeArtifacts extends Shape
{
    /**
     * @param array{
     *     SourceCodeArtifactsObjectKey: string,
     *     BuildArtifactsObjectKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
