<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunctionConcurrency;

trait DeleteFunctionConcurrencyTrait
{
    /**
     * @param DeleteFunctionConcurrencyRequest $args
     * @return void
     */
    public function deleteFunctionConcurrency(DeleteFunctionConcurrencyRequest $args)
    {
        parent::deleteFunctionConcurrency($args->toArray());
    }
}
