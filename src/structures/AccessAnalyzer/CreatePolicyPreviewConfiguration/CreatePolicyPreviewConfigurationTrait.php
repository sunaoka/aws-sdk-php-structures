<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreatePolicyPreviewConfiguration;

trait CreatePolicyPreviewConfigurationTrait
{
    /**
     * @param CreatePolicyPreviewConfigurationRequest $args
     * @return CreatePolicyPreviewConfigurationResponse
     */
    public function createPolicyPreviewConfiguration(CreatePolicyPreviewConfigurationRequest $args)
    {
        $result = parent::createPolicyPreviewConfiguration($args->toArray());
        return new CreatePolicyPreviewConfigurationResponse($result->toArray());
    }
}
