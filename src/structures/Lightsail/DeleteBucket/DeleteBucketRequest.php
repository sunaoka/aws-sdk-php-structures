<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property bool|null $forceDelete
 */
class DeleteBucketRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     forceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
