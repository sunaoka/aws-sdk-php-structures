<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketInventoryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 * @property string|null $ExpectedBucketOwner
 */
class GetBucketInventoryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
