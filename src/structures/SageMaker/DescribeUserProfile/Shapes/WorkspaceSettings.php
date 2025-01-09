<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3ArtifactPath
 * @property string $S3KmsKeyId
 */
class WorkspaceSettings extends Shape
{
    /**
     * @param array{
     *     S3ArtifactPath?: string,
     *     S3KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
