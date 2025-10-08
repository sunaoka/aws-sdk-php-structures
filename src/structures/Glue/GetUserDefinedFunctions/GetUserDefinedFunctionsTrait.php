<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunctions;

trait GetUserDefinedFunctionsTrait
{
    /**
     * @param GetUserDefinedFunctionsRequest $args
     * @return GetUserDefinedFunctionsResponse
     */
    public function getUserDefinedFunctions(GetUserDefinedFunctionsRequest $args)
    {
        $result = parent::getUserDefinedFunctions($args->toArray());
        return new GetUserDefinedFunctionsResponse($result->toArray());
    }
}
