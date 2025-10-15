<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $bucketName
 * @property string|null $pageToken
 * @property bool|null $includeConnectedResources
 * @property bool|null $includeCors
 */
class GetBucketsRequest extends Request
{
    /**
     * @param array{
     *     bucketName?: string|null,
     *     pageToken?: string|null,
     *     includeConnectedResources?: bool|null,
     *     includeCors?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
