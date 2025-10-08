<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateSqlInjectionMatchSet;

trait UpdateSqlInjectionMatchSetTrait
{
    /**
     * @param UpdateSqlInjectionMatchSetRequest $args
     * @return UpdateSqlInjectionMatchSetResponse
     */
    public function updateSqlInjectionMatchSet(UpdateSqlInjectionMatchSetRequest $args)
    {
        $result = parent::updateSqlInjectionMatchSet($args->toArray());
        return new UpdateSqlInjectionMatchSetResponse($result->toArray());
    }
}
