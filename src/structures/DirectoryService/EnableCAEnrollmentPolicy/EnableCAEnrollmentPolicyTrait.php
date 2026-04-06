<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableCAEnrollmentPolicy;

trait EnableCAEnrollmentPolicyTrait
{
    /**
     * @param EnableCAEnrollmentPolicyRequest $args
     * @return EnableCAEnrollmentPolicyResponse
     */
    public function enableCAEnrollmentPolicy(EnableCAEnrollmentPolicyRequest $args)
    {
        $result = parent::enableCAEnrollmentPolicy($args->toArray());
        return new EnableCAEnrollmentPolicyResponse($result->toArray());
    }
}
