<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $bucketOwnerAccountId
 * @property 'ENABLED'|'DISABLED'|null $initialScan
 */
class StreamBucketConfig extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     bucketOwnerAccountId?: string|null,
     *     initialScan?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
