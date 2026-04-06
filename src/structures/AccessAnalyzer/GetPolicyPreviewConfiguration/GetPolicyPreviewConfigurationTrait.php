<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewConfiguration;

trait GetPolicyPreviewConfigurationTrait
{
    /**
     * @param GetPolicyPreviewConfigurationRequest $args
     * @return GetPolicyPreviewConfigurationResponse
     */
    public function getPolicyPreviewConfiguration(GetPolicyPreviewConfigurationRequest $args)
    {
        $result = parent::getPolicyPreviewConfiguration($args->toArray());
        return new GetPolicyPreviewConfigurationResponse($result->toArray());
    }
}
