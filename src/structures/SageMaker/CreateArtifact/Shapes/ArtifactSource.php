<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceUri
 * @property list<ArtifactSourceType>|null $SourceTypes
 */
class ArtifactSource extends Shape
{
    /**
     * @param array{
     *     SourceUri: string,
     *     SourceTypes?: list<ArtifactSourceType>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
