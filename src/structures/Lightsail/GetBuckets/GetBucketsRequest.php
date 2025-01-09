<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property string $pageToken
 * @property bool $includeConnectedResources
 */
class GetBucketsRequest extends Request
{
    /**
     * @param array{
     *     bucketName?: string,
     *     pageToken?: string,
     *     includeConnectedResources?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
