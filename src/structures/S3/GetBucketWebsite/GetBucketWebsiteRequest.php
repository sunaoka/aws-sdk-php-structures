<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketWebsite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ExpectedBucketOwner
 */
class GetBucketWebsiteRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
