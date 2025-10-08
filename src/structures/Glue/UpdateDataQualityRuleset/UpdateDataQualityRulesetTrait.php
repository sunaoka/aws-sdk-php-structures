<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityRuleset;

trait UpdateDataQualityRulesetTrait
{
    /**
     * @param UpdateDataQualityRulesetRequest $args
     * @return UpdateDataQualityRulesetResponse
     */
    public function updateDataQualityRuleset(UpdateDataQualityRulesetRequest $args)
    {
        $result = parent::updateDataQualityRuleset($args->toArray());
        return new UpdateDataQualityRulesetResponse($result->toArray());
    }
}
