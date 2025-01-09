<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAccelerateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ExpectedBucketOwner
 * @property 'requester' $RequestPayer
 */
class GetBucketAccelerateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: 'requester'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
