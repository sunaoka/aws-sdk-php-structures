<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $LocalPath
 * @property 'Continuous'|'EndOfJob' $S3UploadMode
 */
class ProcessingS3Output extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     LocalPath?: string|null,
     *     S3UploadMode: 'Continuous'|'EndOfJob'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
