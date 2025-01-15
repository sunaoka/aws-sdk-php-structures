<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3ArtifactPath
 * @property string|null $S3KmsKeyId
 */
class WorkspaceSettings extends Shape
{
    /**
     * @param array{
     *     S3ArtifactPath?: string|null,
     *     S3KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
