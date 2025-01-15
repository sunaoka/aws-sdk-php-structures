<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketArn
 * @property string|null $fileKey
 * @property string|null $objectVersion
 */
class S3LocationDescription extends Shape
{
    /**
     * @param array{
     *     bucketArn?: string|null,
     *     fileKey?: string|null,
     *     objectVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
