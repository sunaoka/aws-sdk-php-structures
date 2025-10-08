<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteMetricPolicy;

trait DeleteMetricPolicyTrait
{
    /**
     * @param DeleteMetricPolicyRequest $args
     * @return DeleteMetricPolicyResponse
     */
    public function deleteMetricPolicy(DeleteMetricPolicyRequest $args)
    {
        $result = parent::deleteMetricPolicy($args->toArray());
        return new DeleteMetricPolicyResponse($result->toArray());
    }
}
