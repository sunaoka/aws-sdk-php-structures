<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteSqlInjectionMatchSet;

trait DeleteSqlInjectionMatchSetTrait
{
    /**
     * @param DeleteSqlInjectionMatchSetRequest $args
     * @return DeleteSqlInjectionMatchSetResponse
     */
    public function deleteSqlInjectionMatchSet(DeleteSqlInjectionMatchSetRequest $args)
    {
        $result = parent::deleteSqlInjectionMatchSet($args->toArray());
        return new DeleteSqlInjectionMatchSetResponse($result->toArray());
    }
}
