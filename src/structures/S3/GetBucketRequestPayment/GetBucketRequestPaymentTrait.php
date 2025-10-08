<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketRequestPayment;

trait GetBucketRequestPaymentTrait
{
    /**
     * @param GetBucketRequestPaymentRequest $args
     * @return GetBucketRequestPaymentResponse
     */
    public function getBucketRequestPayment(GetBucketRequestPaymentRequest $args)
    {
        $result = parent::getBucketRequestPayment($args->toArray());
        return new GetBucketRequestPaymentResponse($result->toArray());
    }
}
