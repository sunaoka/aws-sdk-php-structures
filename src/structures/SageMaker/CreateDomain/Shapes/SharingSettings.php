<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Allowed'|'Disabled' $NotebookOutputOption
 * @property string $S3OutputPath
 * @property string $S3KmsKeyId
 */
class SharingSettings extends Shape
{
    /**
     * @param array{
     *     NotebookOutputOption?: 'Allowed'|'Disabled',
     *     S3OutputPath?: string,
     *     S3KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
