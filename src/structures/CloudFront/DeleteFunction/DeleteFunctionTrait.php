<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteFunction;

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
