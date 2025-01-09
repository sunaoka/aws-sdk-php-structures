<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContinuationToken
 * @property string $ExpectedBucketOwner
 */
class ListBucketAnalyticsConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContinuationToken?: string,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
