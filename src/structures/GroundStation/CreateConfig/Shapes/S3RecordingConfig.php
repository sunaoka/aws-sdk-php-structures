<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $roleArn
 * @property string|null $prefix
 */
class S3RecordingConfig extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     roleArn: string,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
