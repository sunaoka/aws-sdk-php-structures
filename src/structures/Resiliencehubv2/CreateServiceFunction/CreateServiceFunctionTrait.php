<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateServiceFunction;

trait CreateServiceFunctionTrait
{
    /**
     * @param CreateServiceFunctionRequest $args
     * @return CreateServiceFunctionResponse
     */
    public function createServiceFunction(CreateServiceFunctionRequest $args)
    {
        $result = parent::createServiceFunction($args->toArray());
        return new CreateServiceFunctionResponse($result->toArray());
    }
}
