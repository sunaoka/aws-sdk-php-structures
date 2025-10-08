<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDataQualityRuleset;

trait DeleteDataQualityRulesetTrait
{
    /**
     * @param DeleteDataQualityRulesetRequest $args
     * @return DeleteDataQualityRulesetResponse
     */
    public function deleteDataQualityRuleset(DeleteDataQualityRulesetRequest $args)
    {
        $result = parent::deleteDataQualityRuleset($args->toArray());
        return new DeleteDataQualityRulesetResponse($result->toArray());
    }
}
