<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteConfigurationPolicy;

trait DeleteConfigurationPolicyTrait
{
    /**
     * @param DeleteConfigurationPolicyRequest $args
     * @return DeleteConfigurationPolicyResponse
     */
    public function deleteConfigurationPolicy(DeleteConfigurationPolicyRequest $args)
    {
        $result = parent::deleteConfigurationPolicy($args->toArray());
        return new DeleteConfigurationPolicyResponse($result->toArray());
    }
}
