<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateSqlInjectionMatchSet;

trait CreateSqlInjectionMatchSetTrait
{
    /**
     * @param CreateSqlInjectionMatchSetRequest $args
     * @return CreateSqlInjectionMatchSetResponse
     */
    public function createSqlInjectionMatchSet(CreateSqlInjectionMatchSetRequest $args)
    {
        $result = parent::createSqlInjectionMatchSet($args->toArray());
        return new CreateSqlInjectionMatchSetResponse($result->toArray());
    }
}
