<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class OutputS3Object extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
