<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArtifactArn
 * @property string $ArtifactName
 * @property ArtifactSource $Source
 * @property string $ArtifactType
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ArtifactSummary extends Shape
{
    /**
     * @param array{
     *     ArtifactArn?: string,
     *     ArtifactName?: string,
     *     Source?: ArtifactSource,
     *     ArtifactType?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
