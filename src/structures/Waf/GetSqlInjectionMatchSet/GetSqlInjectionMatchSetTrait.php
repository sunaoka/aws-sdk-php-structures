<?php

namespace Sunaoka\Aws\Structures\Waf\GetSqlInjectionMatchSet;

trait GetSqlInjectionMatchSetTrait
{
    /**
     * @param GetSqlInjectionMatchSetRequest $args
     * @return GetSqlInjectionMatchSetResponse
     */
    public function getSqlInjectionMatchSet(GetSqlInjectionMatchSetRequest $args)
    {
        $result = parent::getSqlInjectionMatchSet($args->toArray());
        return new GetSqlInjectionMatchSetResponse($result->toArray());
    }
}
