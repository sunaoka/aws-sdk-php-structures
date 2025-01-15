<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string|null,
     *     S3Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
