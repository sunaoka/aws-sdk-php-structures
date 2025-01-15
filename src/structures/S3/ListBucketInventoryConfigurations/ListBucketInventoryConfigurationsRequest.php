<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ContinuationToken
 * @property string|null $ExpectedBucketOwner
 */
class ListBucketInventoryConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContinuationToken?: string|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
