<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes;

trait ListRuleTypesTrait
{
    /**
     * @param ListRuleTypesRequest $args
     * @return ListRuleTypesResponse
     */
    public function listRuleTypes(ListRuleTypesRequest $args)
    {
        $result = parent::listRuleTypes($args->toArray());
        return new ListRuleTypesResponse($result->toArray());
    }
}
