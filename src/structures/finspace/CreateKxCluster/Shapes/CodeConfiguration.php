<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3Key
 * @property string|null $s3ObjectVersion
 */
class CodeConfiguration extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3Key?: string|null,
     *     s3ObjectVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
