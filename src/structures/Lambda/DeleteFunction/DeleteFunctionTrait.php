<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunction;

trait DeleteFunctionTrait
{
    /**
     * @param DeleteFunctionRequest $args
     * @return void
     */
    public function deleteFunction(DeleteFunctionRequest $args)
    {
        parent::deleteFunction($args->toArray());
    }
}
