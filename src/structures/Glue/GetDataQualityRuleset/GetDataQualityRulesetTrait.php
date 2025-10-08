<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleset;

trait GetDataQualityRulesetTrait
{
    /**
     * @param GetDataQualityRulesetRequest $args
     * @return GetDataQualityRulesetResponse
     */
    public function getDataQualityRuleset(GetDataQualityRulesetRequest $args)
    {
        $result = parent::getDataQualityRuleset($args->toArray());
        return new GetDataQualityRulesetResponse($result->toArray());
    }
}
