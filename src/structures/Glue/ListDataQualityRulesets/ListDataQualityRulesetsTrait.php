<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesets;

trait ListDataQualityRulesetsTrait
{
    /**
     * @param ListDataQualityRulesetsRequest $args
     * @return ListDataQualityRulesetsResponse
     */
    public function listDataQualityRulesets(ListDataQualityRulesetsRequest $args)
    {
        $result = parent::listDataQualityRulesets($args->toArray());
        return new ListDataQualityRulesetsResponse($result->toArray());
    }
}
