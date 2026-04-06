<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeletePolicyPreviewConfiguration;

trait DeletePolicyPreviewConfigurationTrait
{
    /**
     * @param DeletePolicyPreviewConfigurationRequest $args
     * @return DeletePolicyPreviewConfigurationResponse
     */
    public function deletePolicyPreviewConfiguration(DeletePolicyPreviewConfigurationRequest $args)
    {
        $result = parent::deletePolicyPreviewConfiguration($args->toArray());
        return new DeletePolicyPreviewConfigurationResponse($result->toArray());
    }
}
