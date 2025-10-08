<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateRuleMetadata;

trait UpdateRuleMetadataTrait
{
    /**
     * @param UpdateRuleMetadataRequest $args
     * @return UpdateRuleMetadataResponse
     */
    public function updateRuleMetadata(UpdateRuleMetadataRequest $args)
    {
        $result = parent::updateRuleMetadata($args->toArray());
        return new UpdateRuleMetadataResponse($result->toArray());
    }
}
