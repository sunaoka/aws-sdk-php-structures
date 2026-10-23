<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sqsArn
 * @property list<StreamBucketConfig>|null $buckets
 */
class IngestionStreamS3Source extends Shape
{
    /**
     * @param array{
     *     sqsArn: string,
     *     buckets?: list<StreamBucketConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
