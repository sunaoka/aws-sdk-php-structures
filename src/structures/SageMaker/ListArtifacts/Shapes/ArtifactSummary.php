<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArtifactArn
 * @property string|null $ArtifactName
 * @property ArtifactSource|null $Source
 * @property string|null $ArtifactType
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ArtifactSummary extends Shape
{
    /**
     * @param array{
     *     ArtifactArn?: string|null,
     *     ArtifactName?: string|null,
     *     Source?: ArtifactSource|null,
     *     ArtifactType?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
