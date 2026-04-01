<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetArtifactMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property string $artifactId
 * @property string $fileName
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ArtifactMetadataItem extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     artifactId: string,
     *     fileName: string,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
