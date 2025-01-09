<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property bool $forceDelete
 */
class DeleteBucketRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     forceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
