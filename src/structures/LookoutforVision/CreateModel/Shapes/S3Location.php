<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $Prefix
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
