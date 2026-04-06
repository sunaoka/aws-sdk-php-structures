<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableCAEnrollmentPolicy;

trait DisableCAEnrollmentPolicyTrait
{
    /**
     * @param DisableCAEnrollmentPolicyRequest $args
     * @return DisableCAEnrollmentPolicyResponse
     */
    public function disableCAEnrollmentPolicy(DisableCAEnrollmentPolicyRequest $args)
    {
        $result = parent::disableCAEnrollmentPolicy($args->toArray());
        return new DisableCAEnrollmentPolicyResponse($result->toArray());
    }
}
