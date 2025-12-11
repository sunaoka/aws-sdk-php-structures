<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteConnectionFunction;

trait DeleteConnectionFunctionTrait
{
    /**
     * @param DeleteConnectionFunctionRequest $args
     * @return void
     */
    public function deleteConnectionFunction(DeleteConnectionFunctionRequest $args)
    {
        parent::deleteConnectionFunction($args->toArray());
    }
}
