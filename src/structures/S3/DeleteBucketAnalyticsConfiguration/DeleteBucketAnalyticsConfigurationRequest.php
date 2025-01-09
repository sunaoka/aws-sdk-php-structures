<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketAnalyticsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 * @property string $ExpectedBucketOwner
 */
class DeleteBucketAnalyticsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
