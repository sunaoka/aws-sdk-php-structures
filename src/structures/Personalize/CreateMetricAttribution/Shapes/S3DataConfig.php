<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateMetricAttribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property string $kmsKeyArn
 */
class S3DataConfig extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
