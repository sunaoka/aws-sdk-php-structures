<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketRequestPayment;

trait PutBucketRequestPaymentTrait
{
    /**
     * @param PutBucketRequestPaymentRequest $args
     * @return void
     */
    public function putBucketRequestPayment(PutBucketRequestPaymentRequest $args)
    {
        parent::putBucketRequestPayment($args->toArray());
    }
}
