<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateRuleVersion;

trait UpdateRuleVersionTrait
{
    /**
     * @param UpdateRuleVersionRequest $args
     * @return UpdateRuleVersionResponse
     */
    public function updateRuleVersion(UpdateRuleVersionRequest $args)
    {
        $result = parent::updateRuleVersion($args->toArray());
        return new UpdateRuleVersionResponse($result->toArray());
    }
}
