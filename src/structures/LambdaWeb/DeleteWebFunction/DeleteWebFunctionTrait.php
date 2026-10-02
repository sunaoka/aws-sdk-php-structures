<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteWebFunction;

trait DeleteWebFunctionTrait
{
    /**
     * @param DeleteWebFunctionRequest $args
     * @return void
     */
    public function deleteWebFunction(DeleteWebFunctionRequest $args)
    {
        parent::deleteWebFunction($args->toArray());
    }
}
