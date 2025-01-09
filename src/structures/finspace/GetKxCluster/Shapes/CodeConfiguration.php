<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3Key
 * @property string $s3ObjectVersion
 */
class CodeConfiguration extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string,
     *     s3Key?: string,
     *     s3ObjectVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
