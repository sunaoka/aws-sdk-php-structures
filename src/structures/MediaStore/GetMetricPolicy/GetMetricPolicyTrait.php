<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetMetricPolicy;

trait GetMetricPolicyTrait
{
    /**
     * @param GetMetricPolicyRequest $args
     * @return GetMetricPolicyResponse
     */
    public function getMetricPolicy(GetMetricPolicyRequest $args)
    {
        $result = parent::getMetricPolicy($args->toArray());
        return new GetMetricPolicyResponse($result->toArray());
    }
}
