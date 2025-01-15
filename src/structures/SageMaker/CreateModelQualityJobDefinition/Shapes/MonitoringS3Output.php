<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $LocalPath
 * @property 'Continuous'|'EndOfJob'|null $S3UploadMode
 */
class MonitoringS3Output extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     LocalPath: string,
     *     S3UploadMode?: 'Continuous'|'EndOfJob'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
