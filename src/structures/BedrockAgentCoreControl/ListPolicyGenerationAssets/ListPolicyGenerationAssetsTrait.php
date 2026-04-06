<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyGenerationAssets;

trait ListPolicyGenerationAssetsTrait
{
    /**
     * @param ListPolicyGenerationAssetsRequest $args
     * @return ListPolicyGenerationAssetsResponse
     */
    public function listPolicyGenerationAssets(ListPolicyGenerationAssetsRequest $args)
    {
        $result = parent::listPolicyGenerationAssets($args->toArray());
        return new ListPolicyGenerationAssetsResponse($result->toArray());
    }
}
