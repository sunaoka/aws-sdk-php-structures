<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $LocalPath
 * @property 'Continuous'|'EndOfJob' $S3UploadMode
 */
class MonitoringS3Output extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     LocalPath: string,
     *     S3UploadMode?: 'Continuous'|'EndOfJob'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
