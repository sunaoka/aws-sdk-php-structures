<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeThesaurus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class S3Path extends Shape
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
