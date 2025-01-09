<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Subdirectory
 * @property string $S3BucketArn
 * @property string $BucketAccessRoleArn
 */
class ReportDestinationS3 extends Shape
{
    /**
     * @param array{
     *     Subdirectory?: string,
     *     S3BucketArn: string,
     *     BucketAccessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
