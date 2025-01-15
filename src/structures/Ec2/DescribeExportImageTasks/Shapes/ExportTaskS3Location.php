<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Bucket
 * @property string|null $S3Prefix
 */
class ExportTaskS3Location extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string|null,
     *     S3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
