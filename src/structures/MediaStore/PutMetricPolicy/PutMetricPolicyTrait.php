<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutMetricPolicy;

trait PutMetricPolicyTrait
{
    /**
     * @param PutMetricPolicyRequest $args
     * @return PutMetricPolicyResponse
     */
    public function putMetricPolicy(PutMetricPolicyRequest $args)
    {
        $result = parent::putMetricPolicy($args->toArray());
        return new PutMetricPolicyResponse($result->toArray());
    }
}
