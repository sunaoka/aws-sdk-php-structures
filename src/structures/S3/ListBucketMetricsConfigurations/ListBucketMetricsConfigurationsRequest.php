<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketMetricsConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContinuationToken
 * @property string $ExpectedBucketOwner
 */
class ListBucketMetricsConfigurationsRequest extends Request
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
