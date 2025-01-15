<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAccelerateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ExpectedBucketOwner
 * @property 'requester'|null $RequestPayer
 */
class GetBucketAccelerateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ExpectedBucketOwner?: string|null,
     *     RequestPayer?: 'requester'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
