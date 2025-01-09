<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateBucketBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property string $bundleId
 */
class UpdateBucketBundleRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     bundleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
