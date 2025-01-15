<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeMetricAttribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property string|null $kmsKeyArn
 */
class S3DataConfig extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
