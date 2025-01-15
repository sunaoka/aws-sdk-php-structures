<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentType
 * @property string|null $ContentDigest
 * @property string $S3Uri
 */
class MetricsSource extends Shape
{
    /**
     * @param array{
     *     ContentType: string,
     *     ContentDigest?: string|null,
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
