<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateCustomPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $fileKey
 * @property string|null $objectVersion
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     fileKey: string,
     *     objectVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
