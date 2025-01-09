<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceUri
 * @property list<ArtifactSourceType> $SourceTypes
 */
class ArtifactSource extends Shape
{
    /**
     * @param array{
     *     SourceUri: string,
     *     SourceTypes?: list<ArtifactSourceType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
