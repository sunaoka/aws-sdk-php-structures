<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListSqlInjectionMatchSets;

trait ListSqlInjectionMatchSetsTrait
{
    /**
     * @param ListSqlInjectionMatchSetsRequest $args
     * @return ListSqlInjectionMatchSetsResponse
     */
    public function listSqlInjectionMatchSets(ListSqlInjectionMatchSetsRequest $args)
    {
        $result = parent::listSqlInjectionMatchSets($args->toArray());
        return new ListSqlInjectionMatchSetsResponse($result->toArray());
    }
}
