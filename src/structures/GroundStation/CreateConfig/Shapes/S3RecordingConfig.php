<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $prefix
 * @property string $roleArn
 */
class S3RecordingConfig extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     prefix?: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
