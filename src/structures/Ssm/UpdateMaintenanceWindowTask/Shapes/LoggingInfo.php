<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property string $S3KeyPrefix
 * @property string $S3Region
 */
class LoggingInfo extends Shape
{
    /**
     * @param array{
     *     S3BucketName: string,
     *     S3KeyPrefix?: string,
     *     S3Region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
