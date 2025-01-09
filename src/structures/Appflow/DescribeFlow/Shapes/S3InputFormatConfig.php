<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'JSON' $s3InputFileType
 */
class S3InputFormatConfig extends Shape
{
    /**
     * @param array{s3InputFileType?: 'CSV'|'JSON'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
