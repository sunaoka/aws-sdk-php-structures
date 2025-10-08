<?php

namespace Sunaoka\Aws\Structures\Lambda\ListVersionsByFunction;

trait ListVersionsByFunctionTrait
{
    /**
     * @param ListVersionsByFunctionRequest $args
     * @return ListVersionsByFunctionResponse
     */
    public function listVersionsByFunction(ListVersionsByFunctionRequest $args)
    {
        $result = parent::listVersionsByFunction($args->toArray());
        return new ListVersionsByFunctionResponse($result->toArray());
    }
}
