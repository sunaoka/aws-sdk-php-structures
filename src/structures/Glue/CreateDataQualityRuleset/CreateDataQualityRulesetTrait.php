<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityRuleset;

trait CreateDataQualityRulesetTrait
{
    /**
     * @param CreateDataQualityRulesetRequest $args
     * @return CreateDataQualityRulesetResponse
     */
    public function createDataQualityRuleset(CreateDataQualityRulesetRequest $args)
    {
        $result = parent::createDataQualityRuleset($args->toArray());
        return new CreateDataQualityRulesetResponse($result->toArray());
    }
}
