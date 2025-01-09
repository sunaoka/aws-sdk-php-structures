<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string $S3Prefix
 */
class ExportTaskS3Location extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string,
     *     S3Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
