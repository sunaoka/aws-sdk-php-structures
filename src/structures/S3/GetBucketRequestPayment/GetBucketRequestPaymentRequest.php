<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketRequestPayment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string|null $ExpectedBucketOwner
 */
class GetBucketRequestPaymentRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
