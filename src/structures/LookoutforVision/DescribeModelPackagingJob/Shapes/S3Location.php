<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Prefix
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
