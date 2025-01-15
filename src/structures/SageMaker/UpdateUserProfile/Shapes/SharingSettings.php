<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Allowed'|'Disabled'|null $NotebookOutputOption
 * @property string|null $S3OutputPath
 * @property string|null $S3KmsKeyId
 */
class SharingSettings extends Shape
{
    /**
     * @param array{
     *     NotebookOutputOption?: 'Allowed'|'Disabled'|null,
     *     S3OutputPath?: string|null,
     *     S3KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
